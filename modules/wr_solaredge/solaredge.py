#!/usr/bin/python
import sys
import os
import time
import getopt
import socket
import ConfigParser
import struct
import binascii
from pymodbus.client.sync import ModbusTcpClient

ipaddress = str(sys.argv[1])
client = ModbusTcpClient(ipaddress, port=502, timeout=5)


def shift_decimal(value, scale_factor):
    return value * 10 ** scale_factor


def get_int16(address, slave_id=1):
    r = 0
    for i in range(5):
        r = client.read_holding_registers(address, 1, unit=slave_id)
        if hasattr(r, 'registers'):
            break
    f = format(r.registers[0], '04x')
    return int(struct.unpack('>h', f.decode('hex'))[0])


def get_int32(address, slave_id=1):
    r = 0
    for i in range(5):
        r = client.read_holding_registers(address, 2, unit=slave_id)
        if hasattr(r, 'registers'):
            break
    f = format(r.registers[0], '04x') + format(r.registers[1], '04x')
    return int(struct.unpack('>i', f.decode('hex'))[0])


def get_float(address, slave_id=1):
    r = 0
    for i in range(5):
        r = client.read_holding_registers(address, 2, unit=slave_id)
        if hasattr(r, 'registers'):
            break
    f =  struct.pack('>HH', r.getRegister(1), r.getRegister(0))
    return int(struct.unpack('>f', f)[0])


def write_file(name, value):
    f = open('/var/www/html/openWB/ramdisk/' + name, 'w')
    f.write(str(value))
    f.close()


def get_values(slave_id):
    pv_power_sf = get_int16(40084, slave_id)
    pv_power = get_int16(40083, slave_id) * -1
    pv_power = shift_decimal(pv_power, pv_power_sf)
    pv_energy_sf = get_int16(40095, slave_id)
    pv_energy = get_int32(40093, slave_id)
    pv_energy = shift_decimal(pv_energy, pv_energy_sf)

    return pv_power, pv_energy


power = energy = 0

slave1id = sys.argv[2]
if slave1id != "none":
    power1, energy1 = get_values(int(slave1id))
    power = power1
    energy = energy1

slave2id = sys.argv[3]
if slave2id != "none":
    power2, energy2 = get_values(int(slave2id))
    power = power + power2
    energy = energy + energy2

slave3id = sys.argv[4]
if slave3id != "none":
    power3, energy3 = get_values(int(slave3id))
    power = power + power3
    energy = energy + energy3

wattbezugmodul = sys.argv[5]
if wattbezugmodul == "bezug_solaredge":
    ac_power_sf = get_int16(40210)
    ac_power = get_int16(40206)
    ac_power = shift_decimal(ac_power, ac_power_sf)
    write_file('wattbezug', ac_power)

    ac_voltage_sf = get_int16(40203)
    ac_voltage_a = get_int16(40196)
    ac_voltage_a = shift_decimal(ac_voltage_a, ac_voltage_sf)
    ac_voltage_b = get_int16(40197)
    ac_voltage_b = shift_decimal(ac_voltage_b, ac_voltage_sf)
    ac_voltage_c = get_int16(40198)
    ac_voltage_c = shift_decimal(ac_voltage_c, ac_voltage_sf)
    write_file('evuv1', ac_voltage_a)
    write_file('evuv2', ac_voltage_b)
    write_file('evuv3', ac_voltage_c)

    ac_current_sf = get_int16(40194)
    ac_current_a = get_int16(40191)
    ac_current_a = shift_decimal(ac_current_a, ac_current_sf)
    ac_current_b = get_int16(40192)
    ac_current_b = shift_decimal(ac_current_b, ac_current_sf)
    ac_current_c = get_int16(40193)
    ac_current_c = shift_decimal(ac_current_c, ac_current_sf)
    write_file('bezuga1', ac_current_a)
    write_file('bezuga2', ac_current_b)
    write_file('bezuga3', ac_current_c)

    ac_power_a = get_int16(40207)
    ac_power_a = shift_decimal(ac_power_a, ac_power_sf)
    ac_power_b = get_int16(40208)
    ac_power_b = shift_decimal(ac_power_b, ac_power_sf)
    ac_power_c = get_int16(40209)
    ac_power_c = shift_decimal(ac_power_c, ac_power_sf)
    write_file('bezugw1', ac_power_a)
    write_file('bezugw2', ac_power_b)
    write_file('bezugw3', ac_power_c)

    ac_pf_sf = get_int16(40225)
    ac_pf_a = get_int16(40222)
    ac_pf_a = shift_decimal(ac_pf_a, ac_pf_sf)
    ac_pf_b = get_int16(40223)
    ac_pf_b = shift_decimal(ac_pf_b, ac_pf_sf)
    ac_pf_c = get_int16(40224)
    ac_pf_c = shift_decimal(ac_pf_c, ac_pf_sf)
    write_file('evupf1', ac_pf_a)
    write_file('evupf2', ac_pf_b)
    write_file('evupf3', ac_pf_c)

    ac_frequency_sf = get_int16(40205)
    ac_frequency = get_int16(40204)
    ac_frequency = shift_decimal(ac_frequency, ac_frequency_sf)
    write_file('evuhz', ac_frequency)

    ac_energy_w_sf = get_int16(40242)
    ac_imported = get_int32(40234)
    ac_imported = shift_decimal(ac_imported, ac_energy_w_sf)
    ac_exported = get_int32(40226)
    ac_exported = shift_decimal(ac_exported, ac_energy_w_sf)
    write_file('bezugkwh', ac_imported)
    write_file('einspeisungkwh', ac_exported)

wattbezugmodul = sys.argv[6]
if wattbezugmodul == "speicher_solaredge":
    storagepower = get_float(62836)
    write_file('speicherleistung', storagepower)
    power = power - storagepower
    storagesoc = get_float(62852)
    write_file('speichersoc', storagesoc)

energyk = energy / 1000

write_file('pvwatt', int(power))
write_file('pvkwh', energy)
write_file('pvkwhk', energyk)

client.close()

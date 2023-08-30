import mysql.connector
import os

def create_connection():
    cnx = None
    try:
        cnx = mysql.connector.connect(user='astropi', password='@str0pi', host='localhost', database='astropi') 
        return cnx
    except:
        print("Database Error")

    return cnx


def clean():
    # create a database connection
    cnx = create_connection()

    if cnx is not None:
        cur = cnx.cursor()

        sql = '	DELETE FROM raspberry; '
        cur.execute(sql)
        sql = '	DELETE FROM power; '
        cur.execute(sql)
        sql = '	DELETE FROM dslr; '
        cur.execute(sql)
        sql = '	DELETE FROM dew; '
        cur.execute(sql)
        sql = '	DELETE FROM mode; '
        cur.execute(sql)
        cnx.commit()

        insert('mode', (False,False))
	insert('dew', ["ON",-100,0,0,-100,0,0,-100,0,0,-100,0,0])
        return
    else:
        print("Error! cannot create the database connection.")

def insert(table, data):
    tables = {	'raspberry': 	["temperature", "ram", "cpu", "hdd"],
		'dew':		["module_status", "dh1_probe", "dh1_pwr", "dh1_mode", "dh2_probe", "dh2_pwr", "dh2_mode", "dh3_probe", "dh3_pwr", "dh3_mode", "dh4_probe", "dh4_pwr", "dh4_mode"],
		'gps':		["module_status", "latitude", "longitude"],
		'weather':	["gps_id", "module_status", "gnd_temperature", "sky_temperature", "gnd_pressure", "gnd_humidity", "is_light", "light_frequency", "sky_quality", "dew_point", "frz_point"],
		'power':	["rpi", "dh1", "dh2", "dh3", "dh4", "out1", "out2", "out3", "out4", "out5", "total"],
		'mode':		["dark", "silent"]
           }

    cnx = create_connection()

    if cnx is not None:
        cur = cnx.cursor()

	# Use for keeping only xx last values in the table
        #sql = ''' 	DELETE FROM raspberry WHERE id NOT IN (SELECT id FROM (SELECT id FROM raspberry ORDER BY id DESC LIMIT 40) foo); '''
        #cur.execute(sql)

        values = ",".join(tables[table])
        for i in range (0, len(tables[table])):
            tables[table][i] = "%s"

        sql = 'INSERT INTO ' + table + '(' + values + ') VALUES(' + ",".join(tables[table]) + '); '
        cur.execute(sql, data)

        cnx.commit()

        return cur.lastrowid
    else:
        print("Error! cannot create the database connection.")


def module_status(name):
    # create a database connection
    cnx = create_connection()

    if cnx is not None:
        cur = cnx.cursor()

        sql = ' SELECT module_status FROM ' + name + ' ORDER BY id DESC LIMIT 1; '
        cur.execute(sql)
        result = cur.fetchone()

        if (result[0] == "ON"):
            return True
        else:
            return False
    else:
        return False


def get_all(name):
    # create a database connection
    cnx = create_connection()

    if cnx is not None:
        cur = cnx.cursor()

        sql = ' SELECT * FROM ' + name + ' ORDER BY id DESC LIMIT 1; '
        cur.execute(sql)
        result = cur.fetchone()

        return result
    else:
        return False

#!/usr/bin/env python
import RPi.GPIO as GPIO
import time

pin1 = 18
pin2 = 21
tiempoAbre = 2.1
tiempoCierra = 2.7
pausa = 1.7

GPIO.setmode(GPIO.BCM)
GPIO.setup(pin1, GPIO.OUT, initial = 0)
GPIO.setup(pin2, GPIO.OUT, initial = 0)

GPIO.output(pin1, 1)
GPIO.output(pin2, 0)
time.sleep(tiempoAbre)

GPIO.output(pin1, 0)
GPIO.output(pin2, 0)
time.sleep(pausa)

GPIO.output(pin1, 0)
GPIO.output(pin2, 1)
time.sleep(tiempoCierra)

GPIO.cleanup()
time.sleep(pausa)

print "OK"

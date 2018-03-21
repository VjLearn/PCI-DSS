@echo off
F:
cd logs
for /R %x in (*.htm) do ren "%x" log.htm
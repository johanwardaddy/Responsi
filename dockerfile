FROM mysql:5.6

COPY bendahara/HMJ_TI_Bebdahara.sql /docker-entrypoint-initdb.d/

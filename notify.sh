#!/bin/bash
uuencode $1 event.jpg | mail -s "motion alert `date`" c.prerovsky@gmail.com

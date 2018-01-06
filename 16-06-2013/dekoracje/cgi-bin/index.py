#!/usr/bin/env python
# -*- coding: utf-8 -*-

import cgi
import cgitb; cgitb.enable()  # for troubleshooting

class FileReader(object):
   u"""Pozwala na szybkie przeczytanie pliku"""
   def __init__(self,name):
       object.__init__(self)
       self.name = name
   def getText(self):
       file = open(self.name,"r")
       return file.read()

form = cgi.FieldStorage()
part = form.getvalue("part", "main")
topic = form.getvalue("topic", "main")

fr = FileReader("template.htm")
text = fr.getText()
print "Content-Type: text/html\n\n"
print text % part

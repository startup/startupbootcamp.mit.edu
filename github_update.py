#!/usr/bin/python
import os
import cgi
import cgitb; cgitb.enable()  # for troubleshooting

print "Content-type: text/html"
print

print """
<html>

<head><title>Success</title></head>

<body>

  <h3> Success </h3>
"""

os.system("git pull")

print """
</body>

</html>
""" % cgi.escape(message)


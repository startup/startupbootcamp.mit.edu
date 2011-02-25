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

  <p>Previous message: %s</p>

  <p>form

  <form method="post" action="index.cgi">
    <p>message: <input type="text" name="message"/></p>
  </form>

</body>

</html>
""" % cgi.escape(message)


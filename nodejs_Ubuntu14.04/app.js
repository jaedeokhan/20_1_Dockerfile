var express = require('express');
var app = express();

apt.get(['/', '/index.html'], function (req, res) {
   res.send('Hello Docker');
});

app.listen(80);


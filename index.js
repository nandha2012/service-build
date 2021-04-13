
const serve = require('koa-static'); 
const send = require('koa-send'); 
const koa = require('koa');
 const app = new koa(); 
app.use(serve(__dirname + '/build')); 
app.use(function* index() { yield send(this, './app/build/index.html'); });
app.listen(8081); console.log("listening on 8081");


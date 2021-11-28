# Auto-redirect
This is using to redirected a page to another page using html and javascript only.
using to redirect for plave to another place page this can use to made a little bit trick
for hidding the real url's. using ```<meta>``` tag we have a amazing trick for html.
this using javascirpt for timer cooldown you can change the time anytimes and you cancutomize this 
but **Dont customize ```<meta>``` tag** is will be unwork

# How to use
To use you just need change a little bit code on bellow :
```
    <meta http-equiv="refresh" content="{your own time}; url={your own links}">
```
To add the time you just need input ```number``` and not input a char or something 'cause this will
be make the ```<meta>``` tag is can't calculating the times. and the ```refresh``` fuction in the ```<meta> requst http server```
is for refreshing the page before redirecting. you can combine this system for ```php``` to make a sense. 
for the url you just need to paste the url. if you using ```.htaccess``` system page link modification
you just need to write the ```PageName``` without any **extentions**.

# Javascript module
Javascript module using the parameter is ```milisecond``` may you can change the params anytimes.
and we using **javascript** for countdown only.
we using this basic code on bellow to make a countdown
```
var timer = 2140;

setInterval( function() {
    timer--;

    if( timer >= 0 ){
        field = document.getElementById('number');
        field.innerHTML = timer;
    }
});
```
variable with name ```timer``` is just for get the number to calculating as countdown, and you can modified the **variable value** 
```field``` variable in here just get the element for tag ```<p id="number">``` on the html module, **You can modified if you want**
and ```.innerHTML``` is using to update or replace the tag name! and for the ```timer >= 0``` is just to check a condition on ```timer``` variable.

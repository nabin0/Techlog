## 1. download the zip folder to your computer.


## 2. run your apache server(xampp or any other). for downloading xamppp you may visit https://www.apachefriends.org/download.html


## 3. unzip the techlog folder in root(using sudo command) section of server (in case of xampp, folder is located at opt/lammp/htdocs/).


## 4. now you can open the website in your browser. link to the website will be http://localhost/techlog.


NOTE: ---

---if you are getting anything like permission denied in the browser----


### follow these procedures

Open terminal press shortcut key Ctrl+Alt+T Goto

```$ cd /opt/lampp/htdocs/```

and change folder read write and execute permission by using chmod command

 
Type command

 ```$ sudo chmod 777 -R techlog```

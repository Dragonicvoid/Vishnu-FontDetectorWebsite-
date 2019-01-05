# Vishnu-FontDetectorWebsite-
This is a laravel project which is a website that detecs font from a picture and save that data to the server if you are log on.

patch 001 note : 
1. we didnt do much as to put resources to this project yet. Since we still researching on how to put image to our PHP Server. this is some of the resources:
 - https://stackoverflow.com/questions/4234589/validation-of-file-extension-before-uploading-file
 - https://www.w3schools.com/jsref/dom_obj_fileupload.asp
2. for the font detection we willbe using Vasile Peste 's Typefont that uses java script and JSON :
 - https://github.com/Vasile-Peste/Typefont
3. to see the project, just change the branch to the recent branches one

patch 002 note : 
1. we already implement the javascript for face detection using default images, if you open the console on your browser
   you could see some data are accepted and decline, we can take the first data (the most likely font) and show it on our website.
2. if you want to try the website download it and run laravel but don't open it on Microsoft Edge.

patch 003 note :
1. we finally added a feature to upload an image.
2. uploaded image will be sent to the database (public/images/), and the name of each file will be on the database, we still name it same for each users (will be updated).
3. to input a image you have to change the directory to localhost/home/{your name}
4. to show the uploaded image click your name on the coner right or change the domain to localhost/table/{your name}
5. as you can see, we don't have login page, so login still manual.
6. if you try to upload the file without login it will break the program.

patch 004 note :
1. we finally able to detects what is the font of the uploaded picture.
2. there are still some bugs, like when you are in session of login, when the other user is also log on your session is also changed.
3. this is probably the last patch since its almost at the end of the semester.
4. can login, register, upload and scan photos, see the user's upload history(if you choose to save it).
5. website can be open on vishnufontdetector.com

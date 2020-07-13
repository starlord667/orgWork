var firebaseConfig = {
    apiKey: "AIzaSyBZfK_mV1niEDZ4y3zUrTfMxaDtkQaitGI",
    authDomain: "orgwork-bb36e.firebaseapp.com",
    databaseURL: "https://orgwork-bb36e.firebaseio.com",
    projectId: "orgwork-bb36e",
    storageBucket: "orgwork-bb36e.appspot.com",
    messagingSenderId: "614984508605",
    appId: "1:614984508605:web:05a60c95b5ac706f78c3d4",
    measurementId: "G-BW0Q48HR86"
};
// Initialize Firebase
firebase.initializeApp(firebaseConfig);
firebase.analytics();


function imagesBanner(){
    
    var imagesRef = storageRef.child('images');
    
    imagesRef.forEach(element => {
        var spaceRef = imagesRef.child(fileName);

        // File path is 'images/space.jpg'
        var path = spaceRef.fullPath
        documentWrite(path);
    });
}

function documentWrite(path){
    document.write('<div class="carousel-item active"> <img class="d-block w-100" src="');
    document.write(path);
    document.write('" alt="Primeiro Slide"> </div>');

}


// Musicas
// goosetaf - clear skies ft. HM surf
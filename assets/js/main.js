(function () {
//    var btns = [];
//    var output = '';
//    btns = document.querySelectorAll('button');
//    output = document.querySelector('#output');
//    for (var i = 0; i < btns.length; i++) {
//        //var btn[i] = document.querySelector('button'); //ermöglicht die Verwendung von CSS-Selektoren wie # und .
//
//        btns[i].addEventListener('click', ajax);
//    }
//    ajax('post', 'data.php', {city: 'Phuket'}, fx);
//    function fx(res) {
//        console.log(res);
//    }
    ajax('post', 'data.php', {city: 'Phuket'}, function (r) {
        console.log(r);
    });
})();
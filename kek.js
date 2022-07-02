window.onload = function () {
    document.querySelector('#login').onclick = function () {
        var hidden_login = document.getElementById('hidden_login');
        hidden_login.style.display = 'block';
    }
}
document.addEventListener('click', function(event) {
    var login = document.getElementById('login');
    var e = document.getElementById('hidden_login');
    if ((!e.contains(event.target))&&(!login.contains(event.target))) e.style.display='none';
});

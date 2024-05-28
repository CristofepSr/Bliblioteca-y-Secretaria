document.getElementById('showListButton').addEventListener('click', function() {
    document.getElementById('modal').style.display = 'block';
});

document.getElementById('closeButton').addEventListener('click', function() {
    document.getElementById('modal').style.display = 'none';
});

window.addEventListener('click', function(event) {
    var modal = document.getElementById('modal');
    if (event.target == modal) {
        modal.style.display = 'none';
    }
});

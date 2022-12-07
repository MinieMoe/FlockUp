const btn = document.getElementById('members');
btn.addEventListener('click', displaymembs);

// Display and hide data on button click
function displaymembs() {
    const div = document.getElementById('membs');
    if (div.style.display !== 'none') {
        div.style.display = 'none';
    } else {
        div.style.display = 'block';
    }
}

const btn2 = document.getElementById('chan');
btn2.addEventListener('click', displaychan);

// Display and hide data on button click
function displaychan() {
    const div = document.getElementById('channels');
    if (div.style.display !== 'none') {
        div.style.display = 'none';
    } else {
        div.style.display = 'block';
    }
}

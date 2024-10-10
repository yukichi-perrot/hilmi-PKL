// Get the form element
const form = document.getElementById('form');

// Add an event listener to the form
form.addEventListener('submit', (e) => {
  // Prevent the default form submission behavior
  e.preventDefault();

  // Get the input values
  const judul = document.getElementById('judul').value;
  const pengarang = document.getElementById('pengarang').value;
  const tahun_terbit = document.getElementById('tahun_terbit').value;
  const jumlah_buku = document.getElementById('jumlah_buku').value;

  // Validate the input values
  if (judul === '' || pengarang === '' || tahun_terbit === '' || jumlah_buku === '') {
    alert('Please fill in all the fields!');
  } else {
    // Send a POST request to the PHP script to add the book
    const xhr = new XMLHttpRequest();
    xhr.open('POST', 'add_book.php', true);
    xhr.setRequestHeader('Content-Type', 'application/x-www-form-urlencoded');

    xhr.onload = function() {
      if (xhr.status === 200) {
        alert('Book added successfully!');
      } else {
        alert('Error adding book!');
      }
    };

    xhr.send(`judul=${judul}&pengarang=${pengarang}&tahun_terbit=${tahun_terbit}&jumlah_buku=${jumlah_buku}`);
  }
});
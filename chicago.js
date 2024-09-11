const scriptURL = 'https://script.google.com/macros/s/AKfycbzUIhMOmudkLoMM9GkmHb3F3Co7IGOB8Sjn9istC9Yd3B_6gnvD6IOeqW0x6jFlAplw/exec'


const form = document.forms['contact-form']


form.addEventListener('submit', e => {
  e.preventDefault()
  fetch(scriptURL, { method: 'POST', body: new FormData(form)})
  .then(response => alert("Thank you! your form is submitted successfully." ))
  .then(() => { window.location.reload(); })
  .catch(error => console.error('Error!', error.message))
})


const inputs = document.querySelectorAll('input[name="slide"]');
const descriptions = document.querySelectorAll('.texto .description');
  
    function showCheckedDescription() {
      inputs.forEach((input, index) => {
        if (input.checked) {
          descriptions.forEach((description, index2) => {
            description.style.display = 'none';
            document.querySelector(`[for="c${index2+1}"] h4`).style.display = 'none';
          });
          document.querySelector(`[for="c${index + 1}"] h4`).style.display = 'block';
          document.getElementById(`description-c${index + 1}`).style.display = 'block';
        }
      });
    }
  
    // Agrega un evento change a los inputs para mostrar la descripción correspondiente
    inputs.forEach((input) => {
      input.addEventListener('change', showCheckedDescription);
    });

showCheckedDescription();
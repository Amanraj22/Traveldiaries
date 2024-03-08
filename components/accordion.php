<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
  <!-- faq/accordion start -->
  <h1 class="acc_head">Trip Essentials</h1>
<div class="containerh">
    
  <div class="image-container">
    <img src="https://img.freepik.com/free-photo/full-shot-travel-concept-with-landmarks_23-2149153258.jpg?3&w=900&t=st=1684848963~exp=1684849563~hmac=5fef78985d151397284c2cc569cc37f355d1af7a43a7a54503d776a4da15d121" alt="Image">
  </div>

  <div class="accordion-container">
    <div class="accordion">
      <div class="accordion-item">
        <div class="accordion-header">
        What should I pack for my trip? <span class="accordion-arrow">&#9660;</span>
        </div>
        <div class="accordion-content">
          <p>Pack essentials like comfortable clothing, travel documents, toiletries, and any specific items for activities.</p>
        </div>
      </div>
      <div class="accordion-item">
        <div class="accordion-header">
        What is included in the travel packages? <span class="accordion-arrow">&#9660;</span>
        </div>
        <div class="accordion-content">
          <p>Packages typically include accommodations, transportation, guided tours, and some meals.</p>
        </div>
      </div>
      <div class="accordion-item">
        <div class="accordion-header">
        What measures do you take to ensure the safety and well-being of travelers? <span class="accordion-arrow">&#9660;</span>
        </div>
        <div class="accordion-content">
          <p>At Travel Diaries, your safety is our utmost priority. We work with trusted partners and suppliers who adhere to strict safety standards. We continuously monitor travel advisories and provide up-to-date information to our travelers. Additionally, we offer comprehensive travel insurance options and provide guidance on health and safety precautions to ensure your peace of mind throughout your journey.</p>
        </div>
      </div>
      <div class="accordion-item">
        <div class="accordion-header">
        What is your cancellation policy? <span class="accordion-arrow">&#9660;</span>
        </div>
        <div class="accordion-content">
          <p>Our cancellation policy is outlined in our terms and conditions. We understand that circumstances may change, and we aim to be as flexible as possible. Please review our cancellation policy or reach out to our team for specific details regarding cancellations and refunds.</p>
        </div>
      </div>
      <div class="accordion-item">
        <div class="accordion-header">
        Are there any age restrictions for your travel packages? <span class="accordion-arrow">&#9660;</span>
        </div>
        <div class="accordion-content">
          <p>Age restrictions may vary depending on the specific package and destination. Some activities or tours may have certain age limitations for safety reasons. We will provide you with all the necessary information regarding age restrictions when planning your trip.</p>
        </div>
      </div>
    </div>
  </div>

</div>




<!-- <script>
const accordionItems = document.querySelectorAll('.accordion-item');

accordionItems.forEach(item => {
  const header = item.querySelector('.accordion-header');
  const content = item.querySelector('.accordion-content');
  const arrow = item.querySelector('.accordion-arrow');

  header.addEventListener('click', () => {
    if (!item.classList.contains('active')) {
      closeAllItems();
      item.classList.add('active');
      content.style.display = 'block';
      arrow.style.transform = 'rotate(180deg)';
    } else {
      item.classList.remove('active');
      content.style.display = 'none';
      arrow.style.transform = 'rotate(0deg)';
    }
  });
});

function closeAllItems() {
  accordionItems.forEach(item => {
    const content = item.querySelector('.accordion-content');
    const arrow = item.querySelector('.accordion-arrow');
    item.classList.remove('active');
    content.style.display = 'none';
    arrow.style.transform = 'rotate(0deg)';
  });
}


    </script> -->
    <!-- faq/accordion end -->

</body>
</html>
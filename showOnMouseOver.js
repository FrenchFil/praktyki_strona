const el = document.getElementById('container');

const hiddenDiv = document.getElementById('hidden-div');

// ✅ Show hidden DIV on hover
el.addEventListener('mouseover', function handleMouseOver() {
    hiddenDiv.style.opacity = '2';
    hiddenDiv.style.display = 'block';
  

  // 👇️ if you used visibility property to hide div
  // hiddenDiv.style.visibility = 'visible';
});

// ✅ (optionally) Hide DIV on mouse out
el.addEventListener('mouseout', function handleMouseOut() {
    hiddenDiv.style.opacity = '0s';
    hiddenDiv.style.display = 'none';
 

  // 👇️ if you used visibility property to hide div
  // hiddenDiv.style.visibility = 'hidden';
});
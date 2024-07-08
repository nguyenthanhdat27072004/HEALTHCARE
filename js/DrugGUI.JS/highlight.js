document.addEventListener('DOMContentLoaded', function () {
    const highlight = document.querySelector('.Dat-highlight');
    if (!highlight) {
      console.error('Error: No element found with class .Dat-highlight');
      return;
    }
  
    const text = highlight.textContent;
    if (!text.length) {
      console.error('Error: No text found inside the .Dat-highlight element');
      return;
    }
  
    highlight.style.opacity = 1; // Thiết lập opacity để hiển thị phần tử
    highlight.textContent = ''; // Clear the text
    const cursorSpan = document.createElement('span');
    cursorSpan.textContent = '|';
    highlight.appendChild(cursorSpan);
  
    const letters = text.split('');
    let i = 0;
    let addingText = true;
  
    const updateText = () => {
      cursorSpan.style.opacity = '1';
      if (addingText) {
        if (i < letters.length) {
          highlight.insertBefore(document.createTextNode(letters[i]), cursorSpan);
          i++;
        } else {
          addingText = false;
          i--; 
          setTimeout(updateText, 1000); 
          return;
        }
      } else {
        if (i >= 0) {
          highlight.removeChild(highlight.childNodes[i]);
          i--;
        } else {
          addingText = true;
          i = 0;
          setTimeout(updateText, 1000); // Delay before starting to add text again
          return;
        }
      }
      setTimeout(updateText, addingText ? 200 : 100); // Đặt timeout cho việc thêm hoặc xóa
    };
  
    setTimeout(updateText, 200);
  });
  
  function scrollToElement(scorlldown) {
    var element = document.getElementById(elementId);
    element.scrollIntoView({ behavior: 'smooth', block: 'start' });
  }
  
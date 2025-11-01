const sendMessageButton = document.querySelector('#send');
const friendNames = document.querySelectorAll('.right-column h4');
const friendImages = document.querySelectorAll('.left-column img');
const currentUser = {
  'image': '',
  'name': ''
};

const sidePanel = `
    <div class="side-panel">
       <div id="close">X</div>
         <div id="message-box">
         <form method="POST">
           <h3>Message</h3>
           <ul>
             <li>
               <img src="/event_machine/public/images/profiles/${currentUser.image}" alt="Image of ${currentUser.name}">
               ${currentUser.name}
             </li>
           </ul>
           <textarea name="message" placeholder="Hola...."></textarea>
           <input type="submit" value="Send" id="send">
        </form>
          </div>
    </div>
`;

function overlayWindow() {
  const overlay = document.createElement('div');
  overlay.setAttribute('id', 'overlay');
  overlay.style.display = 'block';
  return overlay;
}


function loadSidePanel() {
  /*when the user clicks send message button
    slide in window panel from the right of the page
  */
  const overlay = overlayWindow();
  const template = document.createElement('template');
  template.innerHTML = sidePanel;
  overlay.appendChild(template.content);
  document.body.appendChild(overlay);
}

sendMessageButton.addEventListener('click', (e) => {
  //e.preventDefault();
  loadSidePanel();
});

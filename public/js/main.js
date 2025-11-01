const sendMessageButton = document.querySelector('#send');
const friendNames = document.querySelectorAll('.right-column h4');
const friendImages = document.querySelectorAll('.left-column img');

const currentUser = {
  'image': '',
  'name': ''
};

const sidePanel = `
    <div id="side-panel" class="side-panel">
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
  overlay.setAttribute('class', 'overlay');
  overlay.classList.toggle('make-visible');
  return overlay;
}

function sendMessage() {

}

function loadSidePanel() {
  /*when the user clicks send message button
    slide in window panel from the right of the page
  */
  const overlay = overlayWindow();
  const sidePanelTemplate = document.createElement('template');
  sidePanelTemplate.innerHTML = sidePanel;
  overlay.appendChild(sidePanelTemplate.content);
  document.body.appendChild(overlay);
  slideWindow(overlay);
}

function slideWindow(overlay) {
   const sidePanelWindow = document.querySelector('#side-panel');
   sidePanelWindow.classList.toggle('open-window');
   console.log(sidePanelWindow.getAttribute('class'));
   closeWindow(sidePanelWindow, overlay);
}

function closeWindow(sidePanelWindow, overlay) {
  const closeButton = document.querySelector('#close');
  closeButton.addEventListener('click', (e) => {
     e.preventDefault();
     sidePanelWindow.classList.remove('open-window');
     setTimeout(() => {
       overlay.style.opacity = 0;
       overlay.classList.remove('make-visible');
     }, 1000);

  })
}

sendMessageButton.addEventListener('click', (e) => {
   e.preventDefault();
   loadSidePanel();
});

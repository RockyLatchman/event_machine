<div class="page-wrapper">
  <header>
     <h3>Event Machine</h3>
      <nav>
          <menu>
              <li><a href="/event_machine/browse/events">Browse</a></li>
              <li><a href="/event_machine/personal/events">Your events</a></li>
              <li><a href="/event_machine/messages">Messages</a></li>
              <li><a href="/event_machine/settings">Settings</a></li>
              <li><a href="/event_machine/logout" id="logout">Log out</a></li>
          </menu>
      </nav>
  </header>
  <main>
     <h2>Messages</h2>
    <div class="content-card">
       <header>
          <select name="message-date-filter">
            <option value="today">Today</option>
            <option value="yesterday">Yesterday</option>
            <option value="last30">Last 30 days</option>
            <option value="oldest">Older than 30 days</option>
          </select>
          <select name="message-filter">
            <option value="unread">Unread</option>
            <option value="read">Read</option>
            <option value="drafts">Drafts</option>
          </select>
          <menu>
             <li><i class="fa-solid fa-trash-can"></i></li>
             <li><i class="fa-solid fa-paper-plane"></i></li>
          </menu>
       </header>
       <div class="message-container">
           <div class="left-column">
              <img src="/event_machine/public/images/" alt="Image of message sender">
           </div>
           <div class="right-column">
              <h4>Joey Doe</h4>
              <p>I wont make it, sorry :)</p>
              <p>I have to babysit my niece</p>
              <menu>
                <li><a href="/event_machine/reply/uuid">Reply</a></li>
                <li><a href="/event_machine/message/delete/uuid">Delete</a></li>
              </menu>
           </div>
           <div class="message-date">Oct 2, 2025</div>
       </div>
       <div class="message-container">
           <div class="left-column">
              <img src="/event_machine/public/images/" alt="Image of message sender">
           </div>
           <div class="right-column">
              <h4>Joey Doe</h4>
              <p>I wont make it, sorry :)</p>
              <p>I have to babysit my niece</p>
              <menu>
                <li><a href="/event_machine/reply/uuid">Reply</a></li>
                <li><a href="/event_machine/message/delete/uuid">Delete</a></li>
              </menu>
           </div>
            <div class="message-date">Oct 2, 2025</div>
       </div>
       <div class="message-container">
           <div class="left-column">
              <img src="/event_machine/public/images/" alt="Image of message sender">
           </div>
           <div class="right-column">
              <h4>Joey Doe</h4>
              <p>I wont make it, sorry :)</p>
              <p>I have to babysit my niece</p>
              <menu>
                <li><a href="/event_machine/reply/uuid">Reply</a></li>
                <li><a href="/event_machine/message/delete/uuid">Delete</a></li>
              </menu>
           </div>
          <div class="message-date">Oct 2, 2025</div>
       </div>
    </div>
  </main>
  <footer><p>All rights reserved &copy; 2025</p></footer>
</div>

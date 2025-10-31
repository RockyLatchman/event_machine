<div class="page-wrapper">
  <header class="top-menu">
     <h3>Event Machine</h3>
      <nav>
        <menu>
            <li><a href="">About</a></li>
            <li><a href="">Contact</a></li>
            <li><a href="/event_machine/register">Get Started</a></li>
            <li><a href="/event_machine/login">Sign in</a></li>
        </menu>
      </nav>
  </header>
  <main>
    <div class="content-card">
      <form method="POST">
          <h3>Let&apos;s setup your profile</h3>
          <p>Tell us about your interest</p>
          <input type="text" name="name" placeholder="Your name">
         <input type="email" name="email" placeholder="Email">
         <input type="password" name="password" placeholder="Password">
         <input type="text" name="age" placeholder="Age">
         <label>Marital status</label>
         <select name="marital-status">
             <option value="single">I&apos;m single</option>
             <option value="married">I&apos;m Married</option>
             <option value="separated">I&apos;m Separated</option>
         </select>
         <label>Do you have children?</label>
         <select name="children">
             <option value="yes">Yes</option>
             <option value="no">No</option>
         </select>
         <input type="submit" name="submit" value="Next">
      </form>
    </div>
      <div class="progress-status">
          <div></div>
          <div></div>
          <div></div>
          <div></div>
      </div>
  </main>

</div>

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
      <div class="settings-card">
        <form method="POST">
         <h2>Settings</h2>
         <label for="name">Change name</label>
         <input type="text" name="name" id="name">
         <label for="email">Change email</label>
         <input type="email" name="email" id="email">
         <label for="password">Change password</label>
         <input type="password" name="password" id="password">
         <label for="city">Change location</label>
         <input type="text" name="city" id="city">
         <select name="state">
            <option value="AL">Alabama</option>
           	<option value="AK">Alaska</option>
           	<option value="AZ">Arizona</option>
           	<option value="AR">Arkansas</option>
           	<option value="CA">California</option>
           	<option value="CO">Colorado</option>
           	<option value="CT">Connecticut</option>
           	<option value="DE">Delaware</option>
           	<option value="DC">District Of Columbia</option>
           	<option value="FL">Florida</option>
           	<option value="GA">Georgia</option>
           	<option value="HI">Hawaii</option>
           	<option value="ID">Idaho</option>
           	<option value="IL">Illinois</option>
           	<option value="IN">Indiana</option>
           	<option value="IA">Iowa</option>
           	<option value="KS">Kansas</option>
           	<option value="KY">Kentucky</option>
           	<option value="LA">Louisiana</option>
           	<option value="ME">Maine</option>
           	<option value="MD">Maryland</option>
           	<option value="MA">Massachusetts</option>
           	<option value="MI">Michigan</option>
           	<option value="MN">Minnesota</option>
           	<option value="MS">Mississippi</option>
           	<option value="MO">Missouri</option>
           	<option value="MT">Montana</option>
           	<option value="NE">Nebraska</option>
           	<option value="NV">Nevada</option>
           	<option value="NH">New Hampshire</option>
           	<option value="NJ">New Jersey</option>
           	<option value="NM">New Mexico</option>
           	<option value="NY">New York</option>
           	<option value="NC">North Carolina</option>
           	<option value="ND">North Dakota</option>
           	<option value="OH">Ohio</option>
           	<option value="OK">Oklahoma</option>
           	<option value="OR">Oregon</option>
           	<option value="PA">Pennsylvania</option>
           	<option value="RI">Rhode Island</option>
           	<option value="SC">South Carolina</option>
           	<option value="SD">South Dakota</option>
           	<option value="TN">Tennessee</option>
           	<option value="TX">Texas</option>
           	<option value="UT">Utah</option>
           	<option value="VT">Vermont</option>
           	<option value="VA">Virginia</option>
           	<option value="WA">Washington</option>
           	<option value="WV">West Virginia</option>
           	<option value="WI">Wisconsin</option>
           	<option value="WY">Wyoming</option>
         </select>
         <select name="marital-status">
             <option value="single">I&apos;m single</option>
             <option value="married">I&apos;m Married</option>
             <option value="separated">I&apos;m Separated</option>
         </select>
        <label for="bio">Bio</label>
         <textarea name="bio" id="bio"></textarea>
         <div class="profile-photo">
           <input type="file" name="profile-photo">
           <span>Add profile photo</span>
         </div>
         <input type="submit" name="submit" value="Save changes">
       </form>
     </div>
   </main>
  <footer><p>All rights reserved &copy; 2025</p></footer>
</div>

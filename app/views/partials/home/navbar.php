   <nav>
       <ul>
           <li>
               <a href="<?php echo base_url('/'); ?>">Home</a>
           </li>

           <!-- When the user is logged in -->
           <li>
               <a href="<?php echo base_url('about'); ?>">About</a>
           </li>
           <li>
               <a href="<?php echo base_url('logout'); ?>">Logout</a>
           </li>

           <!-- When the user is not logged in -->
           <li>
               <a href="<?php echo base_url('register'); ?>">Register</a>
           </li>
           <li>
               <a href="<?php echo base_url('login'); ?>">Login</a>
           </li>
       </ul>
   </nav>
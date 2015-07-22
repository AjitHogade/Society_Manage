         <ul class="nav nav-tabs" role="tablist">
      <li <?php if($isActive[0]) echo 'class="active"' ?>>
          <a href="/adminDesktop" role="tab" data-toggle="tab">
              <icon class="fa fa-dashboard"></icon> Desktop
          </a>
      </li>
     <li <?php if($isActive[1]) echo 'class="active"' ?>>
      <a href="/allMembers" role="tab" data-toggle="tab">
          <i class="fa fa-users"></i> All-Members
          </a>
      </li>
      <li <?php if($isActive[2]) echo 'class="active"' ?>>
      
          <a href="/createMember" role="tab" data-toggle="tab">
              <i class="fa fa-user-plus"></i> Add-Member
          </a>
      </li>
  <li <?php if($isActive[3]) echo 'class="active"' ?>>
          <a href="/manageMembers" role="tab" data-toggle="tab">
              <i class="fa fa-wrench"></i> Manage-Members
          </a>
      </li>
 <li <?php if($isActive[4]) echo 'class="active"' ?>>
          <a href="/discuss" role="tab" data-toggle="tab">
              <i class="fa fa-group"></i> Discussion
          </a>
      </li>     
     
    </ul>
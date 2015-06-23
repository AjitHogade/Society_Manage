         <ul class="nav nav-tabs" role="tablist">
      <li <?php if($isActive[0]) echo 'class="active"' ?>>
          <a href="/adminDesktop" role="tab" data-toggle="tab">
              <icon class="glyphicon glyphicon-home"></icon> Desktop
          </a>
      </li>
     <li <?php if($isActive[1]) echo 'class="active"' ?>>
      <a href="/allMembers" role="tab" data-toggle="tab">
          <i class="glyphicon glyphicon-user"></i> All-Members
          </a>
      </li>
      <li <?php if($isActive[2]) echo 'class="active"' ?>>
      
          <a href="/createMember" role="tab" data-toggle="tab">
              <i class="glyphicon glyphicon-plus"></i> Add-Member
          </a>
      </li>
  <li <?php if($isActive[3]) echo 'class="active"' ?>>
          <a href="/manageMembers" role="tab" data-toggle="tab">
              <i class="glyphicon glyphicon-wrench"></i> Manage-Members
          </a>
      </li>
     
     
    </ul>

    <div class="panel-group" id="accordion">
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseOne">Desktop</a>
                </h4>
            </div>
            <div id="collapseOne" <?php if($tab == "1") echo 'class="panel-collapse collapse in"'; else echo 'class="panel-collapse collapse"'?>>
                <div class="panel-body" >
                     <div class="panel panel-default"<?php if($isActive[0]) echo 'class="panel panel-primary" style="background-color:#428bca;color:white"' ?>>
                    <p> <center><a href="/memberDesktop"<?php if($isActive[0]) echo 'style="color:white"' ?>>Desktop</a><center></p>
                </div>

                    <div class="panel panel-default" <?php if($isActive[1]) echo 'class="panel panel-primary" style="background-color:#428bca;color:white"' ?>>
                    <p><center><a href="/memberNotification" style="color:black;"<?php if($isActive[1]) echo 'style="color:white"' ?>>Notifications</a></center></p>
                </div>
                </div>
</div>
</div>
        
         <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseTwo">Messages</a>
                </h4>
            </div>
            <div id="collapseTwo"<?php if($tab == "2") echo 'class="panel-collapse collapse in"'; else echo 'class="panel-collapse collapse"'?>>
                <div class="panel-body">
                    <div class="panel panel-default"<?php if($isActive[2]) echo 'class="panel panel-primary" style="background-color:#428bca;color:white"' ?>>
                    <p> <center><a href="/memberInbox"<?php if($isActive[2]) echo 'style="color:white"' ?>>Inbox</a></center></p></div>

                    <div class="panel panel-default"<?php if($isActive[3]) echo 'class="panel panel-primary" style="background-color:#428bca;color:white"' ?>>
                    <p> <center><a href="/memberMessage"<?php if($isActive[3]) echo 'style="color:white"' ?>>Send-Message</a></center></p></div>
                </div>
            </div>
        </div>
       
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseThree">Discussions</a>
                </h4>
            </div>
            <div id="collapseThree"<?php if($tab == "3") echo 'class="panel-collapse collapse in"'; else echo 'class="panel-collapse collapse"'?>>
                <div class="panel-body">
                    <div class="panel panel-default"<?php if($isActive[4]) echo 'class="panel panel-primary" style="background-color:#428bca;color:white"' ?>>
                    <p> <center><a href="/discussion"<?php if($isActive[4]) echo 'style="color:white"' ?>>All Topics</a></center></p></div>

                    <div class="panel panel-default"<?php if($isActive[5]) echo 'class="panel panel-primary" style="background-color:#428bca;color:white"' ?>>
                    <p> <center><a href="/discussion/create"<?php if($isActive[5]) echo 'style="color:white"' ?>>Create Topic</a></center></p></div>
                </div>
            </div>
        </div>
         <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFive">Other Activities</a>
                </h4>
            </div>
            <div id="collapseFive"<?php if($tab == "4") echo 'class="panel-collapse collapse in"'; else echo 'class="panel-collapse collapse"'?>>
                <div class="panel-body">
                    <div class="panel panel-default"<?php if($isActive[6]) echo 'class="panel panel-primary" style="background-color:#428bca;color:white"' ?>>
                    <p> <center><a href="/memberEvents"<?php if($isActive[6]) echo 'style="color:white"' ?>>Organizing Events</a></center></p></div>
                    
                    <div class="panel panel-default"<?php if($isActive[7]) echo 'class="panel panel-primary" style="background-color:#428bca;color:white"' ?>>
                    <p> <center><a href="/memberOthers"<?php if($isActive[7]) echo 'style="color:white"' ?>>Others</a></center></p></div>
                </div>
            </div>
        </div>
        <div class="panel panel-default">
            <div class="panel-heading">
                <h4 class="panel-title">
                    <a data-toggle="collapse" data-parent="#accordion" href="#collapseFour">Contact-Admin</a>
                </h4>
            </div>
            <div id="collapseFour"<?php if($tab == "5") echo 'class="panel-collapse collapse in"'; else echo 'class="panel-collapse collapse"'?>>
                <div class="panel-body">
                    <div class="panel panel-default"<?php if($isActive[8]) echo 'class="panel panel-primary" style="background-color:#428bca;color:white"' ?>>
                    <p> <center><a href="/memberComplaint"<?php if($isActive[8]) echo 'style="color:white"' ?>>Register Complaint</a></center></p></div>

                    <div class="panel panel-default"<?php if($isActive[9]) echo 'class="panel panel-primary" style="background-color:#428bca;color:white"' ?>>
                    <p> <center><a href="/memberSugestion"<?php if($isActive[9]) echo 'style="color:white"' ?>>Sugestions</a></center></p></div>
                </div>
            </div>
        </div>
       
    </div>
    <script>
    $('.accordion-body').on('show',
  function(e){
    $(e.currentTarget).parent().find('.accordion-heading').addClass('active') 
  }
)

$('.accordion-body').on('show',
  function(e){
    $(e.currentTarget).parent().find('.accordion-heading').removeClass('active') 
  }
)
    </script>
<?php if($args[0]=='add'){
    $type=filter_input(INPUT_GET,'type',FILTER_SANITIZE_STRING);$q=$db->prepare("INSERT INTO login (options,rank,active,ti) VALUES ('00000000','0','1',:ti)");
    $q->execute(array(':ti'=>$ti));
    $args[1]=$db->lastInsertId();
    $show="User ".$args[1];
    $q=$db->prepare("UPDATE login SET username=:username WHERE id=:id");
    $q->execute(array(':username'=>$show,':id'=>$args[1]));
    $args[0]='edit';
}
if($args[0]=='edit'){
    $q=$db->prepare("SELECT * FROM login WHERE id=:id");
    $q->execute(array(':id'=>$args[1]));
    $r=$q->fetch(PDO::FETCH_ASSOC);?>
<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <h4 class="col-xs-6">
            Accounts
        </h4>
        <div class="pull-right">
            <a class="btn btn-default" href="<?php echo URL.$settings['system']['admin'].'/accounts';?>"<?php if($config['options']{4}==1)echo' data-toggle="tooltip" data-placement="left" title="Back"';?>><i class="libre libre-back"></i></a>
        </div>
    </div>
    <div class="panel-body">
        <ul class="nav nav-tabs" role="tablist">
            <li role="presentation" class="active"><a href="#account-general" aria-controls="account-general" role="tab" data-toggle="tab">General</a></li>
            <li role="presentation"><a href="#account-images" aria-controls="account-images" role="tab" data-toggle="tab">Images</a></li>
            <li role="presentation"><a href="#account-social" aria-controls="account-social" role="tab" data-toggle="tab">Social</a></li>
            <li role="presentation"><a href="#account-settings" aria-controls="account-settings" role="tab" data-toggle="tab">Settings</a></li>
        </ul>
        <div class="tab-content">
<?php // General ?>
            <div role="tabpanel" class="tab-pane active" id="account-general">
                <div class="form-group">
                    <label for="ti" class="control-label col-xs-4 col-sm-3 col-lg-2">Created</label>
                    <div class="input-group col-xs-8 col-sm-9 col-lg-10">
                        <input type="text" id="ti" class="form-control textinput" value="<?php echo date($config['dateFormat'],$r['ti']);?>" readonly>
                    </div>
                </div>
                <div id="uerror" class="form-group">
                    <label for="username" class="control-label col-xs-4 col-sm-3 col-md-3 col-lg-2">Username</label>
                    <div class="input-group col-xs-8 col-sm-9 col-lg-10">
                        <input type="text" id="username" class="form-control textinput" value="<?php echo$r['username'];?>" data-dbid="<?php echo$r['id'];?>" data-dbt="login" data-dbc="username" placeholder="Enter a Username...">
                    </div>
                </div>
                <div class="form-group">
                    <label for="email" class="control-label col-xs-5 col-sm-3 col-lg-2">Email</label>
                    <div class="input-group col-xs-7 col-sm-9 col-lg-10">
                        <input type="text" id="email" class="form-control textinput" value="<?php echo$r['email'];?>" data-dbid="<?php echo$r['id'];?>" data-dbt="login" data-dbc="email" placeholder="Enter an Email...">
                    </div>
                </div>
                <div class="form-group">
                    <label for="name" class="control-label col-xs-5 col-sm-3 col-lg-2">Name</label>
                    <div class="input-group col-xs-7 col-sm-9 col-lg-10">
                        <input type="text" id="name" class="form-control textinput" value="<?php echo$r['name'];?>" data-dbid="<?php echo$r['id'];?>" data-dbt="login" data-dbc="name" placeholder="Enter a Name...">
                    </div>
                </div>
                <div class="form-group">
                    <label for="url" class="control-label col-xs-5 col-sm-3 col-lg-2">URL</label>
                    <div class="input-group col-xs-7 col-sm-9 col-lg-10">
                        <input type="text" id="url" class="form-control textinput" value="<?php echo$r['url'];?>" data-dbid="<?php echo$r['id'];?>" data-dbt="login" data-dbc="url" placeholder="Enter a URL...">
                    </div>
                </div>
                <div class="form-group">
                    <label for="business" class="control-label col-xs-5 col-sm-3 col-lg-2">Business</label>
                    <div class="input-group col-xs-7 col-sm-9 col-lg-10">
                        <input type="text" id="business" class="form-control textinput" value="<?php echo$r['business'];?>" data-dbid="<?php echo$r['id'];?>" data-dbt="login" data-dbc="business" placeholder="Enter a Business...">
                    </div>
                </div>
                <div class="form-group">
                    <label for="phone" class="control-label col-xs-5 col-sm-3 col-lg-2">Phone</label>
                    <div class="input-group col-xs-7 col-sm-9 col-lg-10">
                        <input type="text" id="phone" class="form-control textinput" value="<?php echo$r['phone'];?>" data-dbid="<?php echo$r['id'];?>" data-dbt="login" data-dbc="phone" placeholder="Enter a Phone Number...">
                    </div>
                </div>
                <div class="form-group">
                    <label for="mobile" class="control-label col-xs-5 col-sm-3 col-lg-2">Mobile</label>
                    <div class="input-group col-xs-7 col-sm-9 col-lg-10">
                        <input type="text" id="mobile" class="form-control textinput" value="<?php echo$r['mobile'];?>" data-dbid="<?php echo$r['id'];?>" data-dbt="login" data-dbc="mobile" placeholder="Enter a Mobile Number...">
                    </div>
                </div>
                <div class="form-group">
                    <label for="address" class="control-label col-xs-5 col-sm-3 col-lg-2">Address</label>
                    <div class="input-group col-xs-7 col-sm-9 col-lg-10">
                        <input type="text" id="address" class="form-control textinput" name="address" value="<?php echo$r['address'];?>" data-dbid="<?php echo$r['id'];?>" data-dbt="login" data-dbc="address" placeholder="Enter an Address...">
                    </div>
                </div>
                <div class="form-group">
                    <label for="suburb" class="control-label col-xs-5 col-sm-3 col-lg-2">Suburb</label>
                    <div class="input-group col-xs-7 col-sm-9 col-lg-10">
                        <input type="text" id="suburb" class="form-control textinput" name="suburb" value="<?php echo$r['suburb'];?>" data-dbid="<?php echo$r['id'];?>" data-dbt="login" data-dbc="suburb" placeholder="Enter a Suburb...">
                    </div>
                </div>
                <div class="form-group">
                    <label for="city" class="control-label col-xs-5 col-sm-3 col-lg-2">City</label>
                    <div class="input-group col-xs-7 col-sm-9 col-lg-10">
                        <input type="text" id="city" class="form-control textinput" name="city" value="<?php echo$r['city'];?>" data-dbid="<?php echo$r['id'];?>" data-dbt="login" data-dbc="city" placeholder="Enter a City...">
                    </div>
                </div>
                <div class="form-group">
                    <label for="state" class="control-label col-xs-5 col-sm-3 col-lg-2">State</label>
                    <div class="input-group col-xs-7 col-sm-9 col-lg-10">
                        <input type="text" id="state" class="form-control textinput" name="state" value="<?php echo$r['state'];?>" data-dbid="<?php echo$r['id'];?>" data-dbt="login" data-dbc="state" placeholder="Enter a State...">
                    </div>
                </div>
                <div class="form-group">
                    <label for="postcode" class="control-label col-xs-5 col-sm-3 col-lg-2">Postcode</label>
                    <div class="input-group col-xs-7 col-sm-9 col-lg-10">
                        <input type="text" id="postcode" class="form-control textinput" name="postcode" value="<?php if($r['postcode']!=0)echo$r['postcode'];?>" data-dbid="<?php echo$r['id'];?>" data-dbt="login" data-dbc="postcode" placeholder="Enter a Postcode...">
                    </div>
                </div>
                <div class="form-group">
                    <label for="order_notes" class="control-label col-xs-5 col-sm-3 col-lg-2">About</label>
                    <div class="input-group col-xs-7 col-sm-9 col-lg-10">
                        <form method="post" target="sp" action="core/update.php">
                            <input type="hidden" name="id" value="<?php echo$r['id'];?>">
                            <input type="hidden" name="t" value="login">
                            <input type="hidden" name="c" value="notes">
                            <textarea id="notes" class="form-control summernote" name="da"><?php echo$r['notes'];?></textarea>
                        </form>
                    </div>
                </div>

            </div>
<?php // Images ?>
            <div role="tabpanel" class="tab-pane" id="account-images">
                <fieldset class="control-fieldset">
                    <legend class="control-legend">Avatar</legend>
                    <div class="form-group">
                        <label for="avatar" class="control-label col-xs-5 col-sm-3 col-lg-2">Avatar</label>
                        <div class="input-group col-xs-7 col-sm-9 col-lg-10">
                            <input type="text" class="form-control hidden-xs" value="<?php echo$r['avatar'];?>" disabled>
                            <div class="input-group-btn">
                                <form target="sp" method="post" enctype="multipart/form-data" action="core/add_data.php">
                                    <input type="hidden" name="id" value="<?php echo$r['id'];?>">
                                    <input type="hidden" name="act" value="add_avatar">
                                    <div class="btn btn-info btn-file">
                                        <span class="libre-stack"><i class="libre libre-stack-1x libre-desktop"></i><i class="libre libre-stack-1x libre-action text-info"></i><i class="libre libre-stack-action libre-action-select"></i></span>
                                        <input type="file" name="fu"<?php if($user['options']{1}==0)echo' disabled';?>>
                                    </div>
                                    <button class="btn btn-success" type="submit"><i class="libre libre-upload"></i></button>
                                </form>
                            </div>
                            <div class="input-group-addon img">
                                <img id="avatar" src="<?php if($r['avatar']!=''&&file_exists('media'.DS.'avatar'.DS.$r['avatar']))echo'media/avatar/'.$r['avatar'];else echo'core/images/noavatar.jpg';?>">
                            </div>
                            <div class="input-group-btn">
                                <button class="btn btn-danger" onclick="imageUpdate('<?php echo$r['id'];?>','login','avatar','');"><i class="libre libre-trash"></i></button>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="gravatar" class="control-label col-xs-5 col-sm-3 col-lg-2">Gravatar</label>
                        <div class="input-group col-xs-7 col-sm-9 col-lg-10">
                            <input type="text" id="gravatar" class="form-control textinput" value="<?php echo$r['gravatar'];?>" data-dbid="<?php echo$r['id'];?>" data-dbt="login" data-dbc="gravatar" placeholder="Enter Gravatar Link...">
                        </div>
                        <div class="help-block col-xs-7 col-sm-9 col-lg-10 pull-right"><a target="_blank" href="http://www.gravatar.com/">Gravatar</a> Link will override any image uploaded as your Avatar.</div>
                    </div>
                </fieldset>
            </div>
<?php // Social ?>
            <div role="tabpanel" class="tab-pane" id="account-social">
                <fieldset class="control-fieldset">
                    <legend class="control-legend">Social Networking</legend>
                    <div class="form-group">
                        <label class="control-label hidden-xs col-sm-3 col-lg-2">&nbsp;</label>
                        <form target="sp" method="post" action="core/add_data.php">
                            <input type="hidden" name="user" value="<?php echo$r['id'];?>">
                            <input type="hidden" name="act" value="add_social">
                            <div class="input-group col-xs-12 col-sm-9 col-lg-10">
                                <span class="input-group-addon">Network</span>
                                <select class="form-control libre" name="icon">
                                    <option value="">None</option>
                                    <option value="500px">&#xea09; 500px</option>
                                    <option value="amazon">&#xea0a; Amazon</option>
                                    <option value="behance">&#xea0c; Behance</option>
                                    <option value="bitcoin">&#xea0d; Bitcoin</option>
                                    <option value="blogger">&#xea0e; Blogger</option>
                                    <option value="buffer">&#xea0f; Buffer</option>
                                    <option value="cargo">&#xea10; Cargo</option>
                                    <option value="codepen">&#xea11; Codepen</option>
                                    <option value="coroflot">&#xea12; Coroflot</option>
                                    <option value="creatica">&#xea13; Creatica</option>
                                    <option value="delicious">&#xea14; Delcicious</option>
                                    <option value="deviantart">&#xea15; DeviantArt</option>
                                    <option value="diaspora">&#xea16; Diaspora</option>
                                    <option value="digg">&#xea17; Digg</option>
                                    <option value="dribbble">&#xea18; Dribbble</option>
                                    <option value="dropbox">&#xea19; Dropbox</option>
                                    <option value="envato">&#xea1b; Envato</option>
                                    <option value="exposure">&#xea1c; Exposure</option>
                                    <option value="facebook">&#xea1d; Facebook</option>
                                    <option value="feedburner">&#xea1e; Feedburner</option>
                                    <option value="flickr">&#xea1f; Flickr</option>
                                    <option value="forrst">&#xea20; Forrst</option>
                                    <option value="github">&#xea21; GitHub</option>
                                    <option value="google-plus">&#xea23; Google+</option>
                                    <option value="gravatar">&#xea24; Gravatar</option>
                                    <option value="hackernews">&#xea25; Hackernews</option>
                                    <option value="icq">&#xea26; ICQ</option>
                                    <option value="instagram">&#xea27; Instagram</option>
                                    <option value="kickstarter">&#xea28; Kickstarter</option>
                                    <option value="last-fm">&#xea29; Last FM</option>
                                    <option value="lego">&#xea2a; Lego</option>
                                    <option value="linkedin">&#xea2b; Linkedin</option>
                                    <option value="livejournal">&#xea2c; LiveJournal</option>
                                    <option value="lynda">&#xea2d; Lynda</option>
                                    <option value="massroots">&#xea2f; Massroots</option>
                                    <option value="medium">&#xea30; Medium</option>
                                    <option value="netlify">&#xea31; Netlify</option>
                                    <option value="ovh">&#xea32; OVH</option>
                                    <option value="paypal">&#xea33; Paypal</option>
                                    <option value="periscope">&#xea34; Periscope</option>
                                    <option value="picasa">&#xea35; Picasa</option>
                                    <option value="pinterest">&#xea36; Pinterest</option>
                                    <option value="play-store">&#xea37; Play Store</option>
                                    <option value="quora">&#xea38; Quora</option>
                                    <option value="redbubble">&#xea39; Red Bubble</option>
                                    <option value="reddit">&#xea3a; Reddit</option>
                                    <option value="sharethis">&#xea3c; Sharethis</option>
                                    <option value="skype">&#xea3d; Skype</option>
                                    <option value="snapchat">&#xea3e; Snapchat</option>
                                    <option value="soundcloud">&#xea3f; Soundcloud</option>
                                    <option value="stackoverflow">&#xea40; Stackoverflow</option>
                                    <option value="steam">&#xea41; Steam</option>
                                    <option value="stumbleupon">&#xea42; StumbleUpon</option>
                                    <option value="tsu">&#xea44; TSU</option>
                                    <option value="tumblr">&#xea45; Tumblr</option>
                                    <option value="twitch">&#xea46; Twitch</option>
                                    <option value="twitter">&#xea47; Twitter</option>
                                    <option value="ubiquiti">&#xea48; Ubiquiti</option>
                                    <option value="unsplash">&#xea49; Unsplash</option>
                                    <option value="vimeo">&#xea4a; Vimeo</option>
                                    <option value="vine">&#xea4b; Vine</option>
                                    <option value="whatsapp">&#xea4c; Whatsapp</option>
                                    <option value="wikipedia">&#xea4d; Wikipedia</option>
                                    <option value="windows-store">&#xea4e; Windows Store</option>
                                    <option value="xbox-live">&#xea4f; Xbox Live</option>
                                    <option value="yahoo">&#xea50; Yahoo</option>
                                    <option value="yelp">&#xea51; Yelp</option>
                                    <option value="youtube">&#xea52; YouTube</option>
                                    <option value="zerply">&#xea53; Zerply</option>
                                    <option value="zune">&#xea54; Zune</option>
                                </select>
                                <div class="input-group-addon">URL</div>
                                <input type="text" class="form-control" name="url" value="" placeholder="Enter a URL...">
                                <div class="input-group-btn">
                                    <button class="btn btn-success"><i class="libre libre-plus"></i></button>
                                </div>
                            </div>
                        </form>
                    </div>
                    <div id="social">
        <?php $ss=$db->prepare("SELECT * FROM choices WHERE contentType='social' AND uid=:uid ORDER BY icon ASC");
        $ss->execute(array(':uid'=>$r['id']));
        while($rs=$ss->fetch(PDO::FETCH_ASSOC)){?>
                        <div id="l_<?php echo$rs['id'];?>" class="form-group">
                            <label class="control-label hidden-xs col-sm-3 col-lg-2">&nbsp;</label>
                            <div class="input-group col-xs-12 col-sm-9 col-lg-10">
                                <div class="input-group-addon">
                                    <span class="libre-stack"><i class="libre libre-square-rounded libre-stack-1x"></i><i class="libre libre-social-<?php echo$rs['icon'];?> libre-stack-1x text-white"></i></span>
                                    <span class="hidden-xs">&nbsp;&nbsp;<?php echo ucfirst($rs['icon']);?></span>
                                </div>
                                <input type="text" class="form-control" value="<?php echo$rs['url'];?>" onchange="update('<?php echo$rs['id'];?>','social','url',$(this).val());" placeholder="Enter a URL...">
                                <div class="input-group-btn">
                                    <form target="sp" action="core/purge.php">
                                        <input type="hidden" name="id" value="<?php echo$rs['id'];?>">
                                        <input type="hidden" name="t" value="choices">
                                        <button class="btn btn-danger"><i class="libre libre-trash"></i></button>
                                    </form>
                                </div>
                            </div>
                        </div>
        <?php }?>
                    </div>
                </fieldset>
            </div>
<?php // Settings?>
            <div role="tabpanel" class="tab-pane" id="account-settings">
                <div class="form-group">
                    <label for="password" class="control-label col-xs-4 col-sm-3 col-lg-2">Password</label>
                    <form target="sp" method="post" action="core/update.php" onsubmit="$('#block').css({'display':'block'});">
                        <div class="input-group col-xs-8 col-sm-9 col-lg-10">
                            <input type="hidden" name="id" value="<?php echo$r['id'];?>">
                            <input type="hidden" name="t" value="login">
                            <input type="hidden" name="c" value="password">
                            <input type="password" id="password" class="form-control" name="da" value="" placeholder="Enter a New Password...">
                            <div class="input-group-btn">
                                <button type="submit" class="btn btn-default">Update Password</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="form-group">
                    <label for="rank" class="control-label col-xs-4 col-sm-3 col-lg-2">Rank</label>
                    <div class="input-group col-xs-8 col-sm-9 col-lg-10">
                        <select id="rank" class="form-control" onchange="update('<?php echo$r['id'];?>','login','rank',$(this).val());">
                            <option value="0"<?php if($r['rank']==0)echo' selected';?>>Visitor</option>
                            <option value="100"<?php if($r['rank']==100)echo' selected';?>>Subscriber</option>
                            <option value="200"<?php if($r['rank']==200)echo' selected';?>>Member</option>
                            <option value="300"<?php if($r['rank']==300)echo' selected';?>>Client</option>
                            <option value="400"<?php if($r['rank']==400)echo' selected';?>>Contributor</option>
                            <option value="500"<?php if($r['rank']==500)echo' selected';?>>Author</option>
                            <option value="600"<?php if($r['rank']==600)echo' selected';?>>Editor</option>
                            <option value="700"<?php if($r['rank']==700)echo' selected';?>>Moderator</option>
                            <option value="800"<?php if($r['rank']==800)echo' selected';?>>Manager</option>
                            <option value="900"<?php if($r['rank']==900)echo' selected';?>>Administrator</option>
                            <option value="1000"<?php if($r['rank']==1000)echo' selected';?>>Developer</option>
                        </select>
                    </div>
                </div>
                <div class="well">
                    <h4>Account Permissions</h4>
                    <div class="form-group">
                        <div class="control-label col-xs-5 col-sm-3 col-lg-2 text-right">
                            <input type="checkbox" id="options0" data-dbid="<?php echo$r['id'];?>" data-dbt="login" data-dbc="options" data-dbb="0"<?php if($r['options']{0}==1)echo' checked';?>>
                            <label for="options0">
                        </div>
                        <label for="options0" div class="input-group col-xs-7 col-sm-9 col-lg-10">
                            <strong>Add/Remove Content</strong>
                        </label>
                    </div>
                    <div class="form-group">
                        <div class="control-label col-xs-5 col-sm-3 col-lg-2 text-right">
                            <input type="checkbox" id="options1" data-dbid="<?php echo$r['id'];?>" data-dbt="login" data-dbc="options" data-dbb="1"<?php if($r['options']{1}==1)echo' checked';?>>
                            <label for="options1">
                        </div>
                        <label for="options1" class="input-group col-xs-7 col-sm-9 col-lg-10">
                            <strong>Edit Content</strong>
                        </label>
                    </div>
                    <div class="form-group">
                        <div class="control-label col-xs-5 col-sm-3 col-lg-2 text-right">
                            <input type="checkbox" id="options2" data-dbid="<?php echo$r['id'];?>" data-dbt="login" data-dbc="options" data-dbb="2"<?php if($r['options']{2}==1)echo' checked';?>>
                            <label for="options2">
                        </div>
                        <label for="options2" class="input-group col-xs-7 col-sm-9 col-lg-10">
                            <strong>Add/Edit Bookings</strong>
                        </label>
                    </div>
                    <div class="form-group">
                        <div class="control-label col-xs-5 col-sm-3 col-lg-2 text-right">
                            <input type="checkbox" id="options3" data-dbid="<?php echo$r['id'];?>" data-dbt="login" data-dbc="options" data-dbb="3"<?php if($r['options']{3}==1)echo' checked';?>>
                            <label for="options3">
                        </div>
                        <label for="options3" class="input-group col-xs-7 col-sm-9 col-lg-10">
                            <strong>Message Viewing/Editing</strong>
                        </label>
                    </div>
                    <div class="form-group">
                        <div class="control-label col-xs-5 col-sm-3 col-lg-2 text-right">
                            <input type="checkbox" id="options4" data-dbid="<?php echo$r['id'];?>" data-dbt="login" data-dbc="options" data-dbb="4"<?php if($r['options']{4}==1)echo' checked';?>>
                            <label for="options4">
                        </div>
                        <label for="options4" div class="input-group col-xs-7 col-sm-9 col-lg-10">
                            <strong>Orders Viewing/Editing</strong>
                        </label>
                    </div>
                    <div class="form-group">
                        <div class="control-label col-xs-5 col-sm-3 col-lg-2 text-right">
                            <input type="checkbox" id="options5" data-dbid="'.$r['id'].'" data-dbt="login" data-dbc="options" data-dbb="5"<?php if($r['options']{5}==1)echo' checked';?>>
                            <label for="options5">
                        </div>
                        <label for="options5" class="input-group col-xs-7 col-sm-9 col-lg-10">
                            <strong>User Accounts Viewing/Editing</strong>
                        </label>
                    </div>
                    <div class="form-group">
                        <div for="options6" class="control-label col-xs-5 col-sm-3 col-lg-2 text-right">
                            <input type="checkbox" id="options6" data-dbid="<?php echo$r['id'];?>" data-dbt="login" data-dbc="options" data-dbb="6"<?php if($r['options']{6}==1)echo' checked';?>>
                            <label for="options6">
                        </div>
                        <label for="options6" class="input-group col-xs-7 col-sm-9 col-lg-10">
                            <strong>SEO Viewing/Editing</strong>
                        </label>
                    </div>
                    <div class="form-group">
                        <div class="control-label col-xs-5 col-sm-3 col-lg-2 text-right">
                            <input type="checkbox" id="options7" data-dbid="<?php echo$r['id'];?>" data-dbt="login" data-dbc="options" data-dbb="7"<?php if($r['options']{7}==1)echo' checked';?>>
                            <label for="options7">
                        </div>
                        <label for="options7" div class="input-group col-xs-7 col-sm-9 col-lg-10">
                            <strong>Preferences Viewing/Editing</strong>
                        </label>
                    </div>
                </div>
            </div>
        </div>



    </div>
</div>
<?php }else{
if($args[0]=='type'){
    if(isset($args[1])){
        $rank=0;
        if($args[1]=='subscriber')$rank=100;
        if($args[1]=='member')$rank=200;
        if($args[1]=='client')$rank==300;
        if($args[1]=='contributor')$rank=400;
        if($args[1]=='author')$rank=500;
        if($args[1]=='editor')$rank=600;
        if($args[1]=='moderator')$rank=700;
        if($args[1]=='manager')$rank=800;
        if($args[1]=='administrator')$rank=900;
        if($args[1]=='developer')$rank=1000;
    }
    $s=$db->prepare("SELECT * FROM login WHERE rank=:rank ORDER BY ti DESC");
    $s->execute(array(':rank'=>$rank));
}else{
    $s=$db->prepare("SELECT * FROM login WHERE rank<:rank ORDER BY ti DESC");
    $s->execute(array(':rank'=>$_SESSION['rank']+1));
}?>
<div class="panel panel-default">
    <div class="panel-heading clearfix">
        <h4 class="col-xs-6">
            <ol class="breadcrumb">
                <li><a href="<?php echo URL.$settings['system']['admin'];?>/accounts">Accounts</a></li>
                <li>
                    <a class="dropdown-toggle" data-toggle="dropdown"><?php if(isset($args[1])&&$args[1]!='')echo ucfirst($args[1]);else echo'All';?> <i class="caret"></i></a>
                    <ul class="dropdown-menu">
                        <li><a href="<?php echo URL.$settings['system']['admin'].'/accounts';?>">All</a></li>
                        <li><a href="<?php echo URL.$settings['system']['admin'].'/accounts/type/visitor';?>">Visitor</a></li>
                        <li><a href="<?php echo URL.$settings['system']['admin'].'/accounts/type/subscriber';?>">Subscriber</a></li>
                        <li><a href="<?php echo URL.$settings['system']['admin'].'/accounts/type/member';?>">Member</a></li>
                        <li><a href="<?php echo URL.$settings['system']['admin'].'/accounts/type/client';?>">Client</a></li>
                        <li><a href="<?php echo URL.$settings['system']['admin'].'/accounts/type/contributor';?>">Contributor</a></li>
                        <li><a href="<?php echo URL.$settings['system']['admin'].'/accounts/type/author';?>">Author</a></li>
                        <li><a href="<?php echo URL.$settings['system']['admin'].'/accounts/type/editor';?>">Editor</a></li>
                        <li><a href="<?php echo URL.$settings['system']['admin'].'/accounts/type/moderator';?>">Moderator</a></li>
                        <li><a href="<?php echo URL.$settings['system']['admin'].'/accounts/type/manager';?>">Manager</a></li>
                        <li><a href="<?php echo URL.$settings['system']['admin'].'/accounts/type/administrator';?>">Administrator</a></li>
                        <li><a href="<?php echo URL.$settings['system']['admin'].'/accounts/type/developer';?>">Developer</a></li>
                    </ul>
                </li>
            </ol>
        </h4>
        <div class="btn-group pull-right">
            <a class="btn btn-default" href="<?php echo URL.$settings['system']['admin'].'/accounts/add';?>"><i class="libre libre-add"></i></a>
        </div>
    </div>
    <div class="panel-body">
        <div class="table-responsive">
            <table class="table table-condensed table-striped table-hover">
                <thead>
                    <tr>
                        <th class="col-xs-7">Username/Name</th>
                        <th class="col-xs-1 text-center">Rank</th>
                        <th class="col-xs-1 text-center">Status</th>
                        <th class="col-xs-3"></th>
                    </tr>
                </thead>
                <tbody>
<?php while($r=$s->fetch(PDO::FETCH_ASSOC)){?>
                    <tr id="l_<?php echo$r['id'];?>" class="item">
                        <td><?php echo$r['username'].':'.$r['name'];?></td>
                        <td class="text-center"><?php echo rank($r['rank']);?></td>
                        <td class="text-center"><?php echo$r['status'];?></td>
                        <td id="controls_<?php echo$r['id'];?>" class="text-right">
                            <a class="btn btn-primary btn-sm" href="<?php echo$settings['system']['admin'].'/accounts/edit/'.$r['id'];?>"<?php if($config['options']{4}==1)echo' data-toggle="tooltip" title="Edit"';?>><i class="libre libre-edit"></i></a>
                            <button class="btn btn-warning btn-sm<?php if($r['status']!='delete')echo' hidden';?>" onclick="updateButtons('<?php echo$r['id'];?>','login','status','unpublished')"<?php if($config['options']{4}==1)echo' data-toggle="tooltip" title="Restore"';?>><i class="libre libre-restore"></i></button>
                            <button class="btn btn-danger btn-sm<?php if($r['status']=='delete')echo' hidden';?>" onclick="updateButtons('<?php echo$r['id'];?>','login','status','delete')"<?php if($config['options']{4}==1)echo' data-toggle="tooltip" title="Delete"';?>><i class="libre libre-trash"></i></button>
                            <button class="btn btn-danger btn-sm<?php if($r['status']!='delete')echo' hidden';?>" onclick="purge('<?php echo$r['id'];?>','login')"<?php if($config['options']{4}==1)echo' data-toggle="tooltip" title="Purge"';?>><i class="libre libre-purge"></i></button>
                        </td>
                    </tr>
<?php }?>
                </tbody>
            </table>
        </div>
    </div>
<?php
}?>
</div>

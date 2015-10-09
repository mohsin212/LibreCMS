<?php
function lang($phrase1,$phrase2=null){
	static $_L=[
		'lang'			=>'English (Australia)',
		'Accounts'		=>'Accounts',
		'accounts'		=>[	'options0'=>'Add/Remove Content',
							'options1'=>'Edit Content',
							'options2'=>'Add/Edit Bookings',
							'options3'=>'Message Viewing/Editing',
							'options4'=>'Orders Viewing/Editing',
							'options5'=>'User Accounts Viewing/Editing',
							'options6'=>'SEO Viewing/Editing',
							'options7'=>'Preferences Viewing/Editing'
						],
		'alert'			=>[	'ordersmallscreen'	=>'Order Editing/Viewing is more suited for larger screens.'
						],
		'Activity'		=>'Activity',
		'Administration'=>'Administration',
		'Bookings'		=>'Bookings',
		'button'		=>[	'0days'				=>'0 Days',
							'7days'				=>'7 Days',
							'14days'			=>'14 Days',
							'21days'			=>'21 Days',
							'30days'			=>'30 Days',
							'add'				=>'Add',
							'all'				=>'All',
							'approve'			=>'Approve',
							'archive'			=>'Archive',
							'archived'			=>'Archived',
							'article'			=>'Article',
							'back'				=>'Back',
							'banking'			=>'Banking',
							'booking'			=>'Booking',
							'browse_image'		=>'Browse for Image',
							'browse_images'		=>'Browse for Images',
							'browse_uploaded'	=>'Browse Uploaded Images',
							'cards'				=>'Cards',
							'contact'			=>'Contact',
							'delete'			=>'Delete',
							'edit'				=>'Edit',
							'email'				=>'Email',
							'event'				=>'Event',
							'interface'			=>'Interface',
							'inventory'			=>'Inventory',
							'invoice'			=>'Invoice',
							'invoices'			=>'Invoices',
							'gallery'			=>'Gallery',
							'list'				=>'List',
							'login'				=>'Login',
							'news'				=>'News',
							'pending'			=>'Pending',
							'portfolio'			=>'Portfolio',
							'print'				=>'Print',
							'proof'				=>'Proof',
							'purge'				=>'Purge',
							'quote'				=>'Quote',
							'quotes'			=>'Quotes',
							'restore'			=>'Restore',
							'schemablogpost'	=>'for Articles',
							'schemacreativework'=>'for Portfolio/Proofs',
							'schemaevent'		=>'for Events',
							'schemaimagegallery'=>'for Gallery Images',
							'schemanewsarticle'	=>'for News',
							'schemaproduct'		=>'for Inventory',
							'schemareview'		=>'for Testimonials',
							'schemaservice'		=>'for Services',
							'security'			=>'Security',
							'seo'				=>'SEO',
							'service'			=>'Service',
							'show'				=>'Show',
							'testimonial'		=>'Testimonial',
							'theme'				=>'Theme',
							'upload'			=>'Upload'
						],
		'Business'		=>'Business',
		'Cancelled'		=>'Cancelled',
		'confirmed'		=>'Confirmed',
		'Content'		=>'Content',
		'Delete'		=>'Delete',
		'End'			=>'End',
		'error'			=>[	'problem'=>'There was a problem!'
						],
		'From'			=>'From',
		'Front'			=>'Front',
		'info'			=>[	'analytics'			=>'These will be used if Page or Content Seo Fields are empty.',
							'cover_0'			=>'Editing a URL Image will retreive the image to the server for Editing.',
							'cover_1'			=>'Uploaded Images take Precedence over URL\'s.',
							'edited'			=>'Edited: ',
							'fccif'				=>' for more information or to look up an FCC ID.',
							'gravatar'			=>' Link will override any image uploaded as your Avatar.',
							'idletime'			=>'\'0\' Disables Idle Timeout...',
							'nocreator'			=>'No Creator Assigned',
							'nodescription'		=>'No Description Assigned',
							'orderclientnote'	=>'Note: Changing values above will update the User\'s Account details.',
							'orderemaillayout'	=>'You can use the following Tokens: {name} {first} {last} {date} {order_number} {notes}',
							'orderemailnotes'	=>'You can use the following Tokens: {name} {first} {last} {date} {order_number} {notes}',
							'recurring'			=>'Note: cron.php must be added to crontab for recurring orders to be processed.',
							'seohelper'			=>'SEO Helper Icon will be hidden on small screens.'
						],
		'label'			=>[	'abn'				=>'ABN',
							'about'				=>'About',
							'accountname'		=>'Account Name',
							'accountnumber'		=>'Account Number',
							'accounts'			=>'Accounts',
							'active'			=>'Active',
							'address'			=>'Address',
							'allow'				=>'Allow',
							'aperture'			=>'Aperture',
							'author'			=>'Author',
							'avatar'			=>'Avatar',
							'bank'				=>'Bank',
							'barcode'			=>'Barcode',
							'bookable'			=>'Bookable',
							'booked'			=>'Booked',
							'bookedfor'			=>'Booked For',
							'bookingend'		=>'Booking End',
							'bookings'			=>'Bookings',
							'brand'				=>'Brand',
							'bsb'				=>'BSB',
							'business'			=>'Business',
							'camera'			=>'Camera',
							'caption'			=>'Enter a Caption...',
							'categoryprimary'	=>'Category Primary',
							'categorysecondary'	=>'Category Secondary',
							'changeclient'		=>'Change Client',
							'city'				=>'City',
							'client'			=>'Client',
							'code'				=>'Code',
							'comment'			=>'Comment',
							'comments'			=>'Comments',
							'content'			=>'Content',
							'contenttype'		=>'contentType',
							'cost'				=>'Cost',
							'country'			=>'Country',
							'cover'				=>'Cover',
							'created'			=>'Created',
							'creator'			=>'Creator',
							'datetimeformat'	=>'Date/Time Format',
							'due'				=>'Due',
							'duedate'			=>'Due Date',
							'edited'			=>'Edited',
							'email'				=>'Email',
							'emailsubjecttokens'=>'You can use the following Tokens: {name} {first} {last} {date} {order_number}',
							'orderemaildefaultsubject'=>'Email Subject',
							'orderemaillayout'	=>'Email Layout',
							'orderemailnotes'	=>'Order Notes',
							'enablesignups'		=>'Enable Account Sign Ups',
							'enabletooltips'	=>'Enable Tooltips',
							'enableguides'		=>'Enable Clickable Helper Guides like this',
							'eventend'			=>'Event End',
							'eventstart'		=>'Event Start',
							'fccid'				=>'FCC ID',
							'featured'			=>'Featured',
							'focallength'		=>'Focal Length',
							'forpayments'		=>'for Payments',
							'gravatar'			=>'Gravatar',
							'idletime'			=>'Idle Timeout',
							'iso'				=>'ISO',
							'image'				=>'Image',
							'internal'			=>'Internal',
							'itemcount'			=>'Item Count',
							'keywords'			=>'Keywords',
							'language'			=>'Language',
							'lens'				=>'Lens',
							'menu'				=>'Menu',
							'mobile'			=>'Mobile',
							'name'				=>'Name',
							'network'			=>'Network',
							'notes'				=>'Notes',
							'order#'			=>'Order #',
							'orderdate'			=>'Order Date',
							'originalfilename'	=>'Orig. Filename',
							'password'			=>'Password',
							'paypalaccount'		=>'Account',
							'paypalipn'			=>'IPN',
							'phone'				=>'Phone',
							'postcode'			=>'Postcode',
							'quantity'			=>'Quantity',
							'rank'				=>'Rank',
							'recurring'			=>'Recurring',
							'schematype'		=>'schemaType',
							'showcost'			=>'Show Cost',
							'shutterspeed'		=>'Shutter Speed',
							'seocaption'		=>'SEO Caption',
							'seodescription'	=>'SEO Description',
							'seokeywords'		=>'SEO Keywords',
							'seotitle'			=>'SEO Title',
							'state'				=>'State',
							'status'			=>'Status',
							'suburb'			=>'Suburb',
							'tags'				=>'Tags',
							'taken'				=>'Taken',
							'timezone'			=>'Timezone',
							'title'				=>'Title',
							'thumb'				=>'Thumb',
							'total'				=>'Total',
							'url'				=>'URL',
							'username'			=>'Username',
							'version'			=>'Version',
							'views'				=>'Views'
						],
		'Login'			=>'Login',
		'Logout'		=>'Logout',
		'Media'			=>'Media',
		'Messages'		=>'Messages',
		'Minutes'		=>'Minutes',
		'none'			=>'None',
		'Orders'		=>'Orders',
		'Overdue'		=>'Overdue',
		'Pages'			=>'Pages',
		'Paid'			=>'Paid',
		'Pending'		=>'Pending',
		'placeholder'	=>[	'accountname'		=>'Enter an Account Name...',
							'accountnumber'		=>'Enter an Account Number...',
							'addemptyentry'		=>'Add Empty Entry...',
							'address'			=>'Enter an Address...',
							'aperture'			=>'Enter Aperture/FStop...',
							'bank'				=>'Enter Bank Name...',
							'barcode'			=>'Enter a Barcode...',
							'brand'				=>'Enter a Brand...',
							'bsb'				=>'Enter a BSB...',
							'business'			=>'Enter a Business...',
							'camera'			=>'Enter Camera Brand...',
							'caption'			=>'Enter a Caption...',
							'category'			=>'Enter a Category/Select from List...',
							'city'				=>'Enter a City...',
							'code'				=>'Enter a Code...',
							'comment'			=>'Enter a Comment...',
							'cost'				=>'Enter a Cost...',
							'country'			=>'Enter a Country',
							'cover'				=>'Enter Cover URL...',
							'email'				=>'Enter an Email...',
							'fccid'				=>'Enter an FCC ID...',
							'focallength'		=>'Enter Focal Length...',
							'iso'				=>'Enter ISO...',
							'gravatar'			=>'Enter Gravatar Link...',
							'keywords'			=>'Enter Keywords...',
							'lens'				=>'Enter Lens...',
							'mobile'			=>'Enter a Mobile Number...',
							'name'				=>'Enter a Name...',
							'orderclientname'	=>'Username, Business or Name...',
							'originalfilename'	=>'Original Filename...',
							'password'			=>'Enter a Password...',
							'paypalaccount'		=>'Enter a PayPal Account...',
							'phone'				=>'Enter a Phone Number...',
							'postcode'			=>'Enter a Postcode...',
							'quantity'			=>'Enter a Quantity...',
							'search'			=>'Search...',
							'selectclient'		=>'Select a Client...',
							'selectdate'		=>'Select a Date/Time...',
							'selectitem'		=>'Select an Item...',
							'seocaption'		=>'Enter a Caption...',
							'seodescription'	=>'Enter a Description...',
							'seokeywords'		=>'Enter Keywords...',
							'seotitle'			=>'Enter an SEO Title...',
							'shutterspeed'		=>'Enter Shutter Speed...',
							'state'				=>'Enter a State...',
							'suburb'			=>'Enter a Suburb...',
							'tags'				=>'Enter Tags...',
							'taken'				=>'Select the Date/Time Image was Taken...',
							'title'				=>'Enter a Title...',
							'url'				=>'Enter a URL...',
							'username'			=>'Enter a Username...'
						],
		'popover'		=>[	'nullcontent'	=>'Working on the Content',
							'nulltitle'		=>'Working on a Title'
						],
		'Preferences'	=>'Preferences',
		'Published'		=>'Published',
		'rank'			=>[ '0'				=>'visitor',
							'visitor'		=>'Visitor',
							'100'			=>'subscriber',
							'subscriber'	=>'Subscriber',
							'200'			=>'member',
							'member'		=>'Member',
							'300'			=>'client',
							'client'		=>'Client',
							'400'			=>'contributor',
							'contributor'	=>'Contributor',
							'500'			=>'author',
							'author'		=>'Author',
							'600'			=>'editor',
							'editor'		=>'Editor',
							'700'			=>'moderator',
							'moderator'		=>'Moderator',
							'800'			=>'manager',
							'manager'		=>'Manager',
							'900'			=>'administrator',
							'administrator'	=>'Administrator',
							'1000'			=>'developer',
							'developer'		=>'Developer'
						],
		'Start'			=>'Start',
		'Statistics'	=>'Statistics',
		'stats'			=>[	'title'				=>'In Site Analytics',
							'comments'			=>'New Comments!',
							'messages'			=>'New Messages!',
							'orders'			=>'Pending Orders!',
							'bookings'			=>'New Bookings!',
							'visits'			=>'Total Visits!',
							'visits_today'		=>'Today',
							'visits_yesterday'	=>'Yesterday',
							'visits_last7days'	=>'Last 7 Days',
							'visits_last30days'	=>'Last 30 Days',
							'unique_visitors'	=>'Unique Browser Visitors!',
							'os'				=>'Operating Systems!',
							'ga_title'			=>'Google Analytics',
							'Authorising'		=>'Authorising!',
							'ga_sessions'		=>'Sessions!',
							'ga_countrysessions'=>'Top Sessions by Country!',
							'ga_topbrowsers'	=>'Top Browsers!',
							'ga_trafficsources'	=>'Traffic Sources!',
							'ga_userflow'		=>'User Flow!'
						],
		'title'			=>[	'account_permissions'	=>'Editing Permissions',
							'analytics'				=>'Default Analytics',
							'banking'				=>'Banking Details',
							'comments'				=>'Comments',
							'content_attribution'	=>'Content Attribution',
							'cover'					=>'Cover',
							'cover/avatar'			=>'Cover/Avatar',
							'dateformatoptions'		=>'Show Date/Time Formatting Options',
							'details'				=>'Details',
							'exif'					=>'EXIF Image Information',
							'googleanalytics'		=>'Google Analytics',
							'image'					=>'Image',
							'image_attribution'		=>'Image Attribution',
							'login'					=>'Login',
							'orderprocessing'		=>'Order Processing',
							'paypal'				=>'PayPal Details',
							'preferencescontentdisplay'=>'Default Content Display',
							'social_networking'		=>'Social Networking'
						],
		'tooltip'		=>[	'nulltitle'			=>'Working on the Tooltip Content.',
							'add'				=>'Add Items by Content Type.',
							'approve'			=>'Approve',
							'archive'			=>'Archive',
							'invoice'			=>'Convert to Invoice...',
							'back'				=>'Back',
							'comments'			=>'Comments',
							'datetimeformat'	=>'Format Layout of all Dates/Times displayed.',
							'dateformatoptions'	=>'Click to show Date/Time Formatting Options.',
							'delete'			=>'Delete',
							'edit'				=>'Edit',
							'emailorder'		=>'Email Order',
							'idletime'			=>'Time in Minutes for Idle Timeout for Auto Logout...',
							'itemcount'			=>'Number of Items to Display.',
							'items'				=>'Show Items by Content Type.',
							'layout_calendar'	=>'Display as Calendar.',
							'layout_card'		=>'Display as Cards.',
							'layout_list'		=>'Display as List.',
							'paypalipn'			=>'',
							'pin'				=>'Pin/Unpin to Top',
							'print'				=>'Print Order',
							'purge'				=>'Purge',
							'restore'			=>'Restore',
							'resize'			=>'Drag to Change Order',
							'schematype'		=>'Schema for Microdata Content.',
							'selectdate'		=>'Select a Date/Time...',
							'timezone'			=>'',
							'views'				=>'Views'
						],
		'unconfirmed'	=>'Unconfirmed',
		'Unpublished'	=>'Unpublished'
	];
	if(isset($phrase2)&&$phrase2!='')
		echo(!array_key_exists($phrase1,$_L))?$phrase2:$_L[$phrase1][$phrase2];
	else
		echo(!array_key_exists($phrase1,$_L))?$phrase1:$_L[$phrase1];
}

<?php //$mobiles = array("mobile","android"); $agent = strtolower($_SERVER['HTTP_USER_AGENT']); $i; foreach($mobiles as $mobile) { if(strpos($agent, $mobile) !== false) { $i += 1; } } if ( $i >= 1 ) {process}?>
					<?php require_once 'Mobile_Detect.php'; $detect = new Mobile_Detect; $mobile = $detect->isMobile(); if($mobile): ?><?php endif; $tablet = $detect->isTablet(); if($tablet): ?><?php endif; ?>
                        <div class="td-pb-span3 td-main-sidebar" role="complementary">
                            <div class="td-ss-main-sidebar">
                               <?php if ( !$mobile || $tablet ) { if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("PostPageLeft") ) : ?><?php endif; ?><?php } ;?>
                               <?php //if ( $i >= 1 ) { if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("reserve") ) : ?><?php //endif; ?><?php //} ;?>
                            </div>
                        </div>
                        
						
                        </div>
                        <div class="td-pb-span3 td-main-sidebar" role="complementary">
                            <div class="td-ss-main-sidebar">
                                <?php if ( !$mobile || $tablet ) { get_sidebar(); } if ( $mobile && !$tablet ) { if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar("PostPageLeftMobile") ) : ?><?php endif; ?><?php } ;?>
                            </div>
                        </div>
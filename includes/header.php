<?php
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/templates/header.' . $LANG_TAG . '.php'))
include_once($SERVER_ROOT . '/content/lang/templates/header.en.php');
else include_once($SERVER_ROOT . '/content/lang/templates/header.' . $LANG_TAG . '.php');
$SHOULD_USE_HARVESTPARAMS = $SHOULD_USE_HARVESTPARAMS ?? false;
$collectionSearchPage = $SHOULD_USE_HARVESTPARAMS ? '/collections/index.php' : '/collections/search/index.php';
?>
<div class="header-wrapper">
	<header>
		<div class="top-wrapper">
			<a class="screen-reader-only" href="#end-nav"><?= $LANG['H_SKIP_NAV'] ?></a>
			<nav class="top-login" aria-label="horizontal-nav">
				<?php
				if ($USER_DISPLAY_NAME) {
					?>
					<div class="welcome-text bottom-breathing-room-rel">
					<?= $LANG['H_WELCOME'] . ' ' . $USER_DISPLAY_NAME ?>!
					</div>
					<span id="profile">
						<form name="profileForm" method="post" action="<?= $CLIENT_ROOT . '/profile/viewprofile.php' ?>">
							<button class="button button-tertiary bottom-breathing-room-rel left-breathing-room-rel" name="profileButton" type="submit"><?= $LANG['H_MY_PROFILE'] ?></button>
						</form>
					</span>
					<span id="logout">
						<form name="logoutForm" method="post" action="<?= $CLIENT_ROOT ?>/profile/index.php?submit=logout">
							<button class="button button-secondary bottom-breathing-room-rel left-breathing-room-rel" name="logoutButton" type="submit"><?= $LANG['H_LOGOUT'] ?></button>
						</form>
					</span>
					<?php
				} else {
					?>
					<span id="login">
						<form name="loginForm" method="post" action="<?= $CLIENT_ROOT . "/profile/index.php" ?>">
							<input name="refurl" type="hidden" value="<?= htmlspecialchars($_SERVER['SCRIPT_NAME'], ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE) . "?" . htmlspecialchars($_SERVER['QUERY_STRING'], ENT_QUOTES) ?>">
							<button class="button button-secondary bottom-breathing-room-rel left-breathing-room-rel" name="loginButton" type="submit"><?= $LANG['H_LOGIN'] ?></button>
						</form>
					</span>
					<?php
				}
				?>
			</nav>
			<div class="top-brand">
				<a href="https://symbiota.org">
					<div class="image-container">
						<?php 
						// <img src="<?= $CLIENT_ROOT \?\>/images/layout/logo_symbiota.png" alt="Symbiota logo"> 
						?>
					</div>
				</a>
				<div class="brand-name">
					<h1><?= $LANG['HEADER2'] ?></h1>
					<h2><?= $LANG['HEADER3'] ?></h2>
				</div>
			</div>
		</div>
		<div class="menu-wrapper">
			<!-- Hamburger icon -->
			<input class="side-menu" type="checkbox" id="side-menu" name="side-menu" />
			<label class="hamb hamb-line hamb-label" for="side-menu" tabindex="0">☰</label>
			<!-- Menu -->
			<nav class="top-menu" aria-label="hamburger-nav">
				<ul class="menu">
					<li>
						<a href="<?= $CLIENT_ROOT ?>/index.php">
							<?= $LANG['H_HOME'] ?>
						</a>
					</li>
					<li>
						<a href="#">
							<?= $LANG['H_SEARCH'] ?>
						</a>
						<ul>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/collections/index.php"><?= $LANG['H_CLASSIC_SEARCH']; ?></a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT . $collectionSearchPage ?>"><?= $LANG['H_ADVANCED_SEARCH']; ?></a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/collections/map/mapinterface.php" target="_blank"><?= $LANG['H_MAP']; ?></a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/collections/exsiccati/index.php"><?= $LANG['H_EXSICCATAE']; ?></a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=checklist"><?= $LANG['H_DYN_LISTS']; ?></a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/checklists/dynamicmap.php?interface=key"><?= $LANG['H_DYN_KEY']; ?></a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/taxa/taxonomy/taxonomydynamicdisplay.php"><?= $LANG['H_TAXONOMIC_EXPLORER']; ?></a>
							</li>
						</ul>
					</li>
					<li>
						<a href="#"><?= $LANG['H_IMAGES']; ?></a>
						<ul>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/imagelib/index.php?target=genus"><?= $LANG['H_IMAGE_BROWSER']; ?></a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/imagelib/search.php"><?= $LANG['H_IMAGE_SEARCH']; ?></a>
							</li>
						</ul>
					</li>
					<?php
						if($LANG_TAG=='es'){
					?>
					<li>
						<a href="#"><?= $LANG['H_INVENTORIES']; ?></a>
						<ul>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/projects/index.php"><?= $LANG['INVPROJ']; ?></a>
							</li>
							<li>
                                <a href="#"> Listas Mundiales de Especies</a>
								<ul>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=519">América del norte</a>
									</li>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=558">Listas Globales de L&iacute;quenes y Hongos Liquen&iacute;colas</a>
									</li>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=556">Listas Rojas Globales de la UICN</a>
									</li>
								</ul>
							</li>
							<li>
                                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=51">Centroam&eacute;rica</a>
								<ul>
								<li>
									<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=516">Panam&aacute;</a>
								</li>
								</ul>
 							</li>
							 <li>
                                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=575">Sudam&eacute;rica</a>
								<ul>
								<li>
									<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=517">Ecuador</a>
								</li>
								</ul>
 							</li>
							<li>
                                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=519">Norteam&eacute;rica</a>
 							</li>
							 <li>
                               <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=512">&Aacute;rtico</a>
	                          </li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=514">Canad&aacute;</a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=555">M&eacute;xico</a>
							</li>
							<li>
								<a href="#">Estados Unidos: A-I</a>
								<ul>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=513">Alaska</a>
									</li>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=100">Arizona</a>
									</li>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=533">Arkansas</a>
									</li>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=101">California</a>
									</li>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=103">Carolina del Norte</a>
								   </li>
								   <li>
        	                            <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=537">Carolina del Sur</a>
									</li>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=510">Colorado</a>
									</li>
									<li>
                	                    <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=544">Dakota del Norte</a>
                        	       </li>
								   <li>
                                  		<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=532">Dakota del Sur</a>
		                            </li>
                		            <li>
                                		<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=509">Florida</a>
                                    </li>
		                            <li>
                		                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=530">Georgia</a>
                                	</li>
                                    <li>
		                                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=550">Hawai'i</a>
                		            </li>
                                	<li>
                                        <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=540">Idaho</a>
		                            </li>
                		            <li>
                                	    <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=554">Illinois</a>
                                    </li>
		                            <li>
                		                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=552">Indiana</a>
                                	</li>
                                    <li>
                                    	<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=518">Iowa</a>
		                            </li>
								</ul>
							</li>
                            <li>
                               <a href="#">Estados Unidos: K-N</a>
                               <ul>
							   		<li>
                                	    <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=553">Kansas</a>
                                    </li>
                		            <li>
		                                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=534">Kentucky</a>
                                	</li>
		                            <li>
        		                       <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=528">Maine</a>
                		           </li>
                        		    <li>
                                       <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=531">Maryland</a>
                                   </li>
                                   <li>
                                       <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=511">Massachusetts</a>
	                               </li>
	        	                    <li>
        	        	               <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=551">Michigan</a>
                	        	   </li>
	                	           <li>
        	                	        <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=546">Minnesota</a>
                	               </li>
                        	       <li>
                                       <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=547">Misisipi</a>
                                   </li>
								   <li>
                                       <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=539">Misuri</a>
                                   </li>
								   <li>
	                                   <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=545">Montana</a>
        	                       </li>
	                               <li>
        	                           <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=529">Nebraska</a>
                	               </li>
	                        	    <li>
        	                           <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=521">Nevada</a>
                	               </li>
                        	       <li>
                                       <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=542">Nueva Jersey</a>
	                               </li>
        	                       <li>
                	                   <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=527">Nueva M&eacute;xico</a>
                        	       </li>
	                               <li>
        	                           <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=543">Nueva York</a>
                	               </li>
								   </li>
                               </ul>
                             </li>
                             <li>
                               <a href="#">Estados Unidos: O-Z</a>
                               <ul>
							   		<li>
        	                            <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=541">Ohio</a>
                	               </li>
                        	       <li>
                                		<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=538">Oklahoma</a>
	                               </li>
        	                       <li>
                	                    <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=525">Oreg&oacute;n</a>
                        	       </li>
	                               <li>
        	                            <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=535">Pensilvania</a>
                	               </li>
                		            <li>
                               	        <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=515">Tennessee</a>
                                    </li>
		                            <li>
                		                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=526">Texas</a>
                                	</li>
                                    <li>
		                                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=524">Utah</a>
                		            </li>
                                	<li>
                                        <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=523">Virginia</a>
		                            </li>
									<li>
                                  		<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=536">Virginia Occidental</a>
		                            </li>
                		            <li>
                              	        <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=548">Washington, D.C.</a>
                                    </li>
		                            <li>
                		                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=549">Washington</a>
                                	</li>
                		            <li>
                              	        <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=102">Wisconsin</a>
                                    </li>
		                            <li>
                		                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=522">Wyoming</a>
                                	</li>
								</ul>
                              </li>
                              <li>
                               <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=500">Parques Nacionales de los Estados Unidos</a>
	                          </li>
               	              <li>
                               <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=505">Regi&oacute;n Subpolar del Sur</a>
                              </li>
						</ul>
						</li>
					<?php
					} else	if($LANG_TAG=='fr'){
					?>
					<li>
						<a href="#"><?= $LANG['H_INVENTORIES']; ?></a>
						<ul>
							<li>
							<a href="<?= $CLIENT_ROOT; ?>/projects/index.php"><?= $LANG['INVPROJ']; ?></a>
							</i>
							<li>
                                <a href="#"><?= $LANG['GLOBAL_CHECKLISTS']; ?></a>
								<ul>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=519"><?= $LANG['NORTH_AMERICA']; ?></a>
									</li>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=558"><?= $LANG['GLOBAL_CHECKLISTS_LICHENS']; ?></a>
									</li>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=556"><?= $LANG['GLOBAL_IUCN_LISTS']; ?></a>
									</li>
								</ul>
							</li>
							<li>
                               <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=512"><?= $LANG['ARCTIC']; ?></a>
							</li>
							<li>
                                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=519"><?= $LANG['NORTH_AMERICA']; ?></a>
 							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=514"><?= $LANG['CANADA']; ?></a>
							</li>
							<li>
									<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=555"><?= $LANG['MEXICO']; ?></a>
							</li>
							<li>
								<a href="#">États Américains: A-I</a>
								<ul>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=513">Alaska</a>
									</li>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=100">Arizona</a>
									</li>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=533">Arkansas</a>
									</li>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=101">Californie</a>
									</li>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=103">Caroline du Nord</a>
								   </li>
									<li>
        	                            <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=537">Caroline du Sud</a>
									</li>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=510">Colorado</a>
									</li>
									<li>
                	                    <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=544">Dakota du Nord</a>
                        	       </li>
									<li>
                                  		<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=532">Dakota du Sud</a>
		                            </li>
                		            <li>
                                		<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=509">Floride</a>
                                    </li>
		                            <li>
                		                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=530">Géorgie</a>
                                	</li>
                                    <li>
		                                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=550">Hawaï</a>
                		            </li>
                                	<li>
                                        <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=540">Idaho</a>
		                            </li>
                		            <li>
                                	    <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=554">Illinois</a>
                                    </li>
		                            <li>
                		                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=552">Indiana</a>
                                	</li>
                                    <li>
                                    	<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=518">Iowa</a>
		                            </li>
                		            <li>
                                	    <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=553">Kansas</a>
                                    </li>
                		            <li>
		                                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=534">Kentucky</a>
                                	</li>
								</ul>
							</li>
                            <li>
                               <a href="#">États Américains: K-N</a>
                               <ul>
		                            <li>
        		                       <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=528">Maine</a>
                		           </li>
                        		    <li>
                                       <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=531">Maryland</a>
                                   </li>
                                   <li>
                                       <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=511">Massachusetts</a>
	                               </li>
	        	                    <li>
        	        	               <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=551">Michigan</a>
                	        	   </li>
                        	       <li>
                                       <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=539">Missouri</a>
                                   </li>
								   <li>
        	                	        <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=546">Minnesota</a>
                	               </li>
                        	       <li>
                                       <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=547">Mississippi</a>
                                   </li>
                                   <li>
	                                   <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=545">Montana</a>
        	                       </li>
	                               <li>
        	                           <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=529">Nebraska</a>
                	               </li>
	                        	    <li>
        	                           <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=521">Nevada</a>
                	               </li>
                        	       <li>
                                       <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=542">New Jersey</a>
	                               </li>
        	                       <li>
                	                   <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=527">Nouveau-Mexique</a>
                        	       </li>
	                               <li>
        	                           <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=543">New York</a>
                	               </li>
                               </ul>
                             </li>
                             <li>
                               <a href="#">États Américains: O-Z</a>
                               <ul>
							   		<li>
        	                            <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=541">Ohio</a>
                	               </li>
                        	       <li>
                                		<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=538">Oklahoma</a>
	                               </li>
        	                       <li>
                	                    <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=525">Oregon</a>
                        	       </li>
	                               <li>
        	                            <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=535">Pennsylvanie</a>
                	               </li>
                		            <li>
                               	        <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=515">Tennessee</a>
                                    </li>
		                            <li>
                		                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=526">Texas</a>
                                	</li>
                                    <li>
		                                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=524">Utah</a>
                		            </li>
                                	<li>
                                        <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=523">Virginie</a>
		                            </li>
									<li>
                                  		<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=536">Virginie-Occidentale</a>
		                            </li>
                		            <li>
                              	        <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=548">Washington, D.C.</a>
                                    </li>
		                            <li>
                		                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=549">Washington</a>
                                	</li>
                		            <li>
                              	        <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=102">Wisconsin</a>
                                    </li>
		                            <li>
                		                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=522">Wyoming</a>
                                	</li>
								</ul>
                              </li>
                              <li>
                               <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=500">Parcs Nationaux des USA</a>
	                          </li>
							  <li>
                                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=51">Amérique Centrale</a>
								<ul>
								<li>
									<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=516">Panama</a>
								</li>
								</ul>
 							</li>
							 <li>
                                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=575">Amérique du Sud</a>
								<ul>
								<li>
									<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=517">Équateur</a>
								</li>
								</ul>
 							</li>
							 <li>
                               <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=500">Parcs Nationaux des USA</a>
	                          </li>
               	              <li>
                               <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=505">Région Subpolaire Méridionale</a>
                              </li>
						</ul>
					</li>
					<?php
					} else {
					?>
					<li>
						<a href="#"><?= $LANG['H_INVENTORIES']; ?></a>
						<ul>
							<li>
							<a href="<?= $CLIENT_ROOT; ?>/projects/index.php"><?= $LANG['INVPROJ']; ?></a>
							</i>
							<li>
                                <a href="#"><?= $LANG['GLOBAL_CHECKLISTS']; ?></a>
								<ul>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=519"><?= $LANG['NORTH_AMERICA']; ?></a>
									</li>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=558"><?= $LANG['GLOBAL_CHECKLISTS_LICHENS']; ?></a>
									</li>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=556"><?= $LANG['GLOBAL_IUCN_LISTS']; ?></a>
									</li>
								</ul>
							</li>
							<li>
                               <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=512"><?= $LANG['ARCTIC']; ?></a>
							</li>
							<li>
                                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=519"><?= $LANG['NORTH_AMERICA']; ?></a>
 							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=514"><?= $LANG['CANADA']; ?></a>
							</li>
							<li>
									<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=555"><?= $LANG['MEXICO']; ?></a>
							</li>
							<li>
								<a href="#">US States: A-L</a>
								<ul>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=513">Alaska</a>
									</li>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=100">Arizona</a>
									</li>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=533">Arkansas</a>
									</li>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=101">California</a>
									</li>
									<li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=510">Colorado</a>
									</li>
                		            <li>
                                		<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=509">Florida</a>
                                    </li>
		                            <li>
                		                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=530">Georgia</a>
                                	</li>
                                    <li>
		                                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=550">Hawai'i</a>
                		            </li>
                                	<li>
                                        <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=540">Idaho</a>
		                            </li>
                		            <li>
                                	    <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=554">Illinois</a>
                                    </li>
		                            <li>
                		                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=552">Indiana</a>
                                	</li>
                                    <li>
                                    	<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=518">Iowa</a>
		                            </li>
                		            <li>
                                	    <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=553">Kansas</a>
                                    </li>
                		            <li>
		                                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=534">Kentucky</a>
                                	</li>
								</ul>
							</li>
                            <li>
                               <a href="#">US States: M-N</a>
                               <ul>
		                            <li>
        		                       <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=528">Maine</a>
                		           </li>
                        		    <li>
                                       <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=531">Maryland</a>
                                   </li>
                                   <li>
                                       <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=511">Massachusetts</a>
	                               </li>
	        	                    <li>
        	        	               <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=551">Michigan</a>
                	        	   </li>
                        	       <li>
                                       <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=539">Missouri</a>
                                   </li>
								   <li>
        	                	        <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=546">Minnesota</a>
                	               </li>
                        	       <li>
                                       <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=547">Mississippi</a>
                                   </li>
                                   <li>
	                                   <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=545">Montana</a>
        	                       </li>
	                               <li>
        	                           <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=529">Nebraska</a>
                	               </li>
	                        	    <li>
        	                           <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=521">Nevada</a>
                	               </li>
                        	       <li>
                                       <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=542">New Jersey</a>
	                               </li>
        	                       <li>
                	                   <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=527">New Mexico</a>
                        	       </li>
	                               <li>
        	                           <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=543">New York</a>
                	               </li>
								   <li>
										<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=103">North Carolina</a>
								   </li>
        	                       <li>
                	                    <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=544">North Dakota</a>
                        	       </li>
								   </li>
                               </ul>
                             </li>
                             <li>
                               <a href="#">US States: O-Z</a>
                               <ul>
							   		<li>
        	                            <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=541">Ohio</a>
                	               </li>
                        	       <li>
                                		<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=538">Oklahoma</a>
	                               </li>
        	                       <li>
                	                    <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=525">Oregon</a>
                        	       </li>
	                               <li>
        	                            <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=535">Pennsylvania</a>
                	               </li>
									<li>
        	                            <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=537">South Carolina</a>
									</li>
                                    <li>
                                  		<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=532">South Dakota</a>
		                            </li>
                		            <li>
                               	        <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=515">Tennessee</a>
                                    </li>
		                            <li>
                		                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=526">Texas</a>
                                	</li>
                                    <li>
		                                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=524">Utah</a>
                		            </li>
                                	<li>
                                        <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=523">Virginia</a>
		                            </li>
                		            <li>
                              	        <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=548">Washington, D.C.</a>
                                    </li>
		                            <li>
                		                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=549">Washington</a>
                                	</li>
                                    <li>
                                  		<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=536">West Virginia</a>
		                            </li>
                		            <li>
                              	        <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=102">Wisconsin</a>
                                    </li>
		                            <li>
                		                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=522">Wyoming</a>
                                	</li>
								</ul>
                              </li>
                              <li>
                               <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=500">US National Parks</a>
	                          </li>
							  <li>
                                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=51">Central America</a>
								<ul>
								<li>
									<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=516">Panama</a>
								</li>
								</ul>
 							</li>
							 <li>
                                <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=575">South America</a>
								<ul>
								<li>
									<a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=517">Ecuador</a>
								</li>
								</ul>
 							</li>
							 <li>
                               <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=500">US National Parks</a>
	                          </li>
               	              <li>
                               <a href="<?= $CLIENT_ROOT; ?>/projects/index.php?pid=505">Southern Subpolar Region</a>
                              </li>
						</ul>
					</li>
					<?php
					}
					?>
					<li>
						<a href="<?= $CLIENT_ROOT; ?>/collections/specprocessor/crowdsource/index.php"><?= $LANG['H_CROWDSOURCING']; ?></a>
					</li>
					<li>
						<a href="#"><?= $LANG['H_ASSOC_PROJECTS']; ?></a>
						<ul>
							<li>
								<a href="http://bryophyteportal.org" target="_blank"><?= $LANG['BRYO_PORTAL']; ?></a>
							</li>
							<li>
								<a href="https://globaltcn.utk.edu/"><?= $LANG['GLOBAL_NETWORK']; ?></a>
							</li>
							<li>
								<a href="http://mycoportal.org" target="_blank">MyCoPortal</a>
							</li>
						</ul>
					</li>
					<li>
					<a href="#"><?= $LANG['H_MORE_INFO']; ?></a>
						<ul>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/includes/usagepolicy.php"><?= $LANG['H_DATA_USAGE']; ?></a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/misc/endorsements.php"><?= $LANG['H_ENDORSEMENTS']; ?></a>
							</li>
							<li>
								<a href="<?= $CLIENT_ROOT; ?>/collections/misc/collprofiles.php"><?= $LANG['H_PARTNERS']; ?></a>
							</li>
						</ul>
					</li>
					<li>
						<a href='<?= $CLIENT_ROOT ?>/sitemap.php'>
							<?= $LANG['H_SITEMAP'] ?>
						</a>
					</li>
					<li>
						<a href="#"><?= $LANG['H_HELP_RESOURCES']; ?></a>
						<ul>
						<li>
							<?php
								if($LANG_TAG=='es'){
							?>
								<a href="https://help.lichenportal.org/index.php/es/chlal-ayuda-y-recursos/" target="_blank"><?= $LANG['CONSORTIUM_RESOURCES']; ?></a>
							<?php
								} else {
							?>
								<a href="https://help.lichenportal.org/index.php/en/cnalh-help-resources/" target="_blank"><?= $LANG['CONSORTIUM_RESOURCES']; ?></a>
							<?php
								}
							?>
							</li>
							<li>
								<a href='<?= $CLIENT_ROOT ?>/glossary/index.php'>
									<?= $LANG['GLOSSARY'] ?>
								</a>
							</li>
							<li>
								<?php
								if($LANG_TAG=='es'){
								?>
									<a href="https://docs.symbiota.org/es/docs/about/" target="_blank"><?= $LANG['H_HELP']; ?></a>
								<?php
								} else {
								?>
									<a href="https://docs.symbiota.org/docs/about/" target="_blank"><?= $LANG['H_HELP']; ?></a>
								<?php
								}
								?>
							</li>
						</ul>
					</li>
					<li id="lang-select-li">
						<label for="language-selection"><?= $LANG['H_SELECT_LANGUAGE'] ?>: </label>
						<select oninput="setLanguage(this)" id="language-selection" name="language-selection">
							<option value="en">English</option>
							<option value="es" <?= ($LANG_TAG=='es'?'SELECTED':'') ?>>Español</option>
							<option value="fr" <?= ($LANG_TAG=='fr'?'SELECTED':'') ?>>Français</option>
						</select>
					</li>
				</ul>
			</nav>
		</div>
		<div id="end-nav"></div>
	</header>
</div>

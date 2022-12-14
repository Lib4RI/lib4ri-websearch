<script type="text/javascript"><!--
	var lib4riSearchByReload = true;
	var lib4riSearchJournalLabelId = 'lib4ri-bentobox-label-2-1-1';
//--></script>


<?php
$host = ''; // if request however use the absolute host link:
// if ( ( $got = @strip_tags($_GET['abs']) ) && $got != 'no' ) {
		$host = ( @empty($_SERVER['HTTP_X_FORWARDED_PROTO']) ? 'http' : $_SERVER['HTTP_X_FORWARDED_PROTO'] ) . '://' . $_SERVER['HTTP_HOST'];
// }

// load CSS by default:
// if ( ( $got = @strip_tags($_GET['css']) ) && $got != 'no' ) {
		echo '<link rel="stylesheet" type="text/css" href="' . $host . '/web/css/lib4ri-websearch.css?ts=' . $got . '">' . "\r\n";
// }

// load JavaScript by default:
// if ( ( $got = @strip_tags($_GET['js']) ) && $got != 'no' ) {
		echo '<script type="text/javascript" src="' . $host . '/web/js/lib4ri-bentobox.js?t=' . $got . '"></script>' . "\r\n";
// }
?>


<div id="lib4ri-websearch-body">

	<div id="lib4ri-search-container">
		<div id="lib4ri-search-form-container">
			<div style="display:inline-block; width:5%; white-space:nowrap; margin-top:0.5ex; margin-right:3ex; text-align:left;">
				<span style="font-weight:bold; font-size:20pt;"><!-- colors not original! -->
					<span style="color:#193658; text-shadow: 1px 1px 5px #030d15;">B</span>
					<span style="color:#00998c; text-shadow: 1px 1px 6px #00302e; position:relative; left:0.075ex;">E</span>
					<span style="color:#84c090; text-shadow: 1px 2px 7px #030d33; position:relative; left:0.125ex;">T</span>
					<span style="color:#d9c889; text-shadow: 2px 2px 7px #48422d;">A</span>
				</span>
				<br><span style="color:#a8a4a0; font-size:smaller;">&nbsp;&nbsp; V e r s i o n</span>
			</div>
			<div style="display:inline-block; text-align:center;" class="lib4ri-search-form-area">
				<div id="lib4ri-search-form-area"><br>&nbsp;</br></div><!-- 
				--><div id="lib4ri-search-form-hint" style="font-size:9pt; text-align:center;">&nbsp;</div>
			</div>
			<div style="display:inline-block; width:5%; white-space:nowrap; margin-top:0.5ex; margin-left:3ex; text-align:right;">
		<!--	<span style="font-weight:bold; font-size:20pt;">
					<span style="color:#193658; text-shadow: 1px 1px 5px #030d15;">B</span>
					<span style="color:#00998c; text-shadow: 1px 1px 6px #00302e; position:relative; left:0.075ex;">E</span>
					<span style="color:#84c090; text-shadow: 1px 2px 7px #030d33; position:relative; left:0.125ex;">T</span>
					<span style="color:#d9c889; text-shadow: 2px 2px 7px #48422d;">A</span>
				</span>
				<br><span style="color:#a8a4a0; font-size:smaller;">&nbsp;&nbsp; V e r s i o n</span>		-->
			</div>
		</div>
	</div>


	<div id="lib4ri-tab-container" style="display:none;"><!-- revealed on search start -->

		<!-- vvvvvvvvvvvvvvvvvvvvvvvv TAB HEADERS/LABELS FOR ALL TABS vvvvvvvvvvvvvvvvvvvvvvvvvvvv -->

			<div id="lib4ri-tab-header-container">
				<div id="lib4ri-search-tab-1" class="lib4ri-search-tab"><a href="javascript:" 
					class="lib4ri-search-tab-link" onclick="javascript:lib4riSearchTabToggle(1)">Articles, Books etc.</a></div>
				<div id="lib4ri-search-tab-2" class="lib4ri-search-tab"><a href="javascript:" 
					class="lib4ri-search-tab-link" onclick="javascript:lib4riSearchTabToggle(2);">Journals</a></div>
				<div id="lib4ri-search-tab-3" class="lib4ri-search-tab"><a href="javascript:" 
					class="lib4ri-search-tab-link" onclick="javascript:lib4riSearchTabToggle(3);">Website</a></div>
			</div>


		<!-- vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv TAB 1 vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv -->

		<div id="lib4ri-result-container-1" class="lib4ri-result-container">
			<div class="lib4ri-search-col lib4ri-search-col-1">

				<div class="lib4ri-bentobox-column-header"><h3>Journal Articles etc.</h3></div>

				<div class="lib4ri-bentobox-container">
					<label class="lib4ri-bentobox-label">Scopus</label>
					<div class="lib4ri-bentobox-result" title="" id="lib4ri-bentobox-scopus"><div class="lib4ri-search-anim-block">&nbsp;</div></div>
				</div>
				<div class="lib4ri-bentobox-container">
					<label class="lib4ri-bentobox-label">Web of Science</label>
					<div class="lib4ri-bentobox-result" title="" id="lib4ri-bentobox-wos"><div class="lib4ri-search-anim-block">&nbsp;</div></div>
				</div>
				<div class="lib4ri-bentobox-container">
					<label class="lib4ri-bentobox-label">Other Articles Sites</label>
					<div id="lib4ri-bentobox-linkset-1-1-1" class="lib4ri-bentobox-linkset" _title="articles:*" title="articles:Google Scholar;articles:Dimensions;articles:swisscovery articles;articles:BASE"><div class="lib4ri-search-anim-block">&nbsp;</div></div>
				</div>
			</div>

			<div class="lib4ri-search-col lib4ri-search-col-2">
				<div class="lib4ri-bentobox-column-header"><h3>Books etc.</h3></div>

				<div class="lib4ri-bentobox-container">
					<label class="lib4ri-bentobox-label">swisscovery Lib4RI</label>
					<div class="lib4ri-bentobox-result" title="" id="lib4ri-bentobox-book-myinstitution"><div class="lib4ri-search-anim-block">&nbsp;</div></div>
				</div>
				<div class="lib4ri-bentobox-container">
					<label class="lib4ri-bentobox-label">Other Books Sites</label>
					<div id="lib4ri-bentobox-linkset-1-2-1" class="lib4ri-bentobox-linkset" title="books:WorldCat;books:KVK;books:Book Trade;books:Google Books;books:Open Library;books:DOAB"><div class="lib4ri-search-anim-block">&nbsp;</div></div>
				</div>
			
				<div class="lib4ri-bentobox-container">
					<label class="lib4ri-bentobox-label">Standards</label>
					<div id="lib4ri-bentobox-linkset-1-2-2" class="lib4ri-bentobox-linkset" title="more:main:Lib4RI Standards Portal"><div class="lib4ri-search-anim-block">&nbsp;</div></div>
				</div>
				<div class="lib4ri-bentobox-container">
					<label class="lib4ri-bentobox-label">Patents</label>
					<div id="lib4ri-bentobox-linkset-1-2-3" class="lib4ri-bentobox-linkset" title="more:Patents:Derwent;more:Patents:Espacenet;more:Patents:Google Patents"><div class="lib4ri-search-anim-block">&nbsp;</div></div>
				</div>

				<!-- work in progress, ETA Dec'22/Jan'23 --><!-- div class="lib4ri-bentobox-container">
					<label class="lib4ri-bentobox-label">Wikipedia</label>
					<div class="lib4ri-bentobox-result" title="" id="lib4ri-bentobox-wikipedia"><div class="lib4ri-search-anim-block">&nbsp;</div></div>
				</div -->

				<div class="lib4ri-bentobox-container">
					<label class="lib4ri-bentobox-label"><!-- Further -->Reference Works</label>
					<div id="lib4ri-bentobox-linkset-1-2-4" class="lib4ri-bentobox-linkset" title="references:Wikipedia ??? EN;references:Wikipedia ??? DE;references:Wikipedia ??? FR;references:Wikipedia ??? IT;references:main:Britannica;;references:Science & Technology:ChemSpider;references:Science & Technology:Elsevier Reference;references:Science & Technology:Springer Materials;references:Science & Technology:Springer Reference;references:Science & Technology:Wiley Reference"><div class="lib4ri-search-anim-block">&nbsp;</div></div>
				</div>
				<div class="lib4ri-bentobox-container">
					<label class="lib4ri-bentobox-label">Dissertations</label>
					<div id="lib4ri-bentobox-linkset-1-2-5" class="lib4ri-bentobox-linkset" title="more:Dissertations:*"><div class="lib4ri-search-anim-block">&nbsp;</div></div>
				</div>
				<div class="lib4ri-bentobox-container">
					<label class="lib4ri-bentobox-label">Maps</label>
					<div id="lib4ri-bentobox-linkset-1-2-6" class="lib4ri-bentobox-linkset" title="more:Maps:OpenStreetMap;more:Maps:Google Maps;more:Maps:map.search.ch;more:Maps:GeoNames"><div class="lib4ri-search-anim-block">&nbsp;</div></div>
				</div>

			</div>

			<div class="lib4ri-search-col lib4ri-search-col-3">
				<div class="lib4ri-bentobox-column-header"><h3>Institutional Repository</h3></div>

				<div class="lib4ri-bentobox-container">
					<label class="lib4ri-bentobox-label">DORA Eawag</label>
					<div class="lib4ri-bentobox-result" title="" id="lib4ri-bentobox-dora-eawag"><div class="lib4ri-search-anim-block">&nbsp;</div></div>
				</div>
				<div class="lib4ri-bentobox-container">
					<label class="lib4ri-bentobox-label">DORA Empa</label>
					<div class="lib4ri-bentobox-result" title="" id="lib4ri-bentobox-dora-empa"><div class="lib4ri-search-anim-block">&nbsp;</div></div>
				</div>
				<div class="lib4ri-bentobox-container">
					<label class="lib4ri-bentobox-label">DORA PSI</label>
					<div class="lib4ri-bentobox-result" title="" id="lib4ri-bentobox-dora-psi"><div class="lib4ri-search-anim-block">&nbsp;</div></div>
				</div>
				<div class="lib4ri-bentobox-container">
					<label class="lib4ri-bentobox-label">DORA WSL</label>
					<div class="lib4ri-bentobox-result" title="" id="lib4ri-bentobox-dora-wsl"><div class="lib4ri-search-anim-block">&nbsp;</div></div>
				</div>
			</div>

		</div><!-- end of "lib4ri-result-container-1" -->


		<!-- vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv TAB 2 vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv -->

		<div id="lib4ri-result-container-2" class="lib4ri-result-container" style="display:none;">

			<div class="lib4ri-search-col lib4ri-search-col-1to2">
				<div class="lib4ri-bentobox-column-header"><h3><!-- Journal List --></h3></div>

				<div class="lib4ri-bentobox-container">
					<label class="lib4ri-bentobox-label" id="lib4ri-bentobox-label-2-1-1" title="Journal List">Lib4RI&#39;s Journal List</label>
					<div class="lib4ri-bentobox-control" id="lib4ri-bentobox-control-2-1-1">&nbsp;<!-- special case / keep &nbsp; / to be tuned --></div>
					<div class="lib4ri-bentobox-result" title="" id="lib4ri-bentobox-journal-dn_and_ci"><div class="lib4ri-search-anim-block">&nbsp;</div></div>
				</div>

				<div class="lib4ri-bentobox-container">
					<label class="lib4ri-bentobox-label">Journal not found? - Try this:</label>
					<div id="lib4ri-bentobox-linkset-2-1-2" class="lib4ri-bentobox-linkset" title="journals:*" _title="journals:SHERPA/RoMEO;journals:DOAJ - Journals"><div class="lib4ri-search-anim-block">&nbsp;</div></div>
				</div>
			</div>

			<div class="lib4ri-search-col lib4ri-search-col-3">
				<div class="lib4ri-bentobox-column-header"><h3><!-- Journal Help --></h3></div>

				<div class="lib4ri-bentobox-container">
					<label class="lib4ri-bentobox-label">Browse Journals by Subject</label><!-- temporary inline CSS, since under construction -->
					<div id="lib4ri-bentobox-linkset-2-3-1" class="lib4ri-bentobox-noapi" style="border: 1px solid #7a5; padding: .5ex 1ex .5ex 3ex;"><div style="height:85px; margin-left:-3px; background:url(https://svgsilh.com/png-512/150271-3f51b5.png) no-repeat; background-size:105px; background-position:left; vertical-align:top; padding:20px 0 0 115px;">Coming Soon!</div></div>
				</div>
			</div>

		</div><!-- end of "lib4ri-result-container-2" -->



		<!-- vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv TAB 3 vvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvvv -->

		<div id="lib4ri-result-container-3" class="lib4ri-result-container">

			<!-- div class="lib4ri-search-col lib4ri-search-col-1">
				<div class="lib4ri-bentobox-column-header"><h3>References</h3></div>

				<div class="lib4ri-bentobox-container">
					<label class="lib4ri-bentobox-label">General</label>
					<div id="lib4ri-bentobox-linkset-3-1-1" class="lib4ri-bentobox-linkset" title="references:Wikipedia ??? EN;references:Wikipedia ??? DE;references:Wikipedia ??? FR;references:Wikipedia ??? IT;references:main:Britannica"><div class="lib4ri-search-anim-block">&nbsp;</div></div>
				</div>
				<div class="lib4ri-bentobox-container">
					<label class="lib4ri-bentobox-label">Science & Technology</label>
					<div id="lib4ri-bentobox-linkset-3-1-2" class="lib4ri-bentobox-linkset" title="references:Science & Technology:ChemSpider;references:Science & Technology:Elsevier Reference;references:Science & Technology:Springer Materials;references:Science & Technology:Springer Reference;references:Science & Technology:Wiley Reference"><div class="lib4ri-search-anim-block">&nbsp;</div></div>
				</div>
			</div -->

			<div class="lib4ri-search-col lib4ri-search-col-1to2">
				<div class="lib4ri-bentobox-column-header"><!-- h3>Col 1+2</h3 --></div>

				<div class="lib4ri-bentobox-container">
					<label class="lib4ri-bentobox-label">Lib4RI</label>
					<div id="lib4ri-bentobox-linkset-3-1-1" class="lib4ri-bentobox-linkset" title="institutes:Lib4RI:Search Lib4RI website with Google"><div class="lib4ri-search-anim-block">&nbsp;</div></div>
				</div>

			</div>

			<!-- div class="lib4ri-search-col lib4ri-search-col-2">
				<div class="lib4ri-bentobox-column-header"><h3>Other Resources</h3></div>

				<div class="lib4ri-bentobox-container">
					<label class="lib4ri-bentobox-label">Standards</label>
					<div id="lib4ri-bentobox-linkset-3-2-1" class="lib4ri-bentobox-linkset" title="more:main:Lib4RI Standards Portal"><div class="lib4ri-search-anim-block">&nbsp;</div></div>
				</div>
			</div -->

			<div class="lib4ri-search-col" id="lib4ri-search-col-3">
				<div class="lib4ri-bentobox-column-header"><!-- h3>Col 3</h3 --></div>

				<div class="lib4ri-bentobox-container">
					<label class="lib4ri-bentobox-label">Eawag</label>
					<div id="lib4ri-bentobox-linkset-3-3-1" class="lib4ri-bentobox-linkset" title="institutes:Eawag:People;institutes:Eawag:Fulltext"><div class="lib4ri-search-anim-block">&nbsp;</div></div>
				</div>
				<div class="lib4ri-bentobox-container">
					<label class="lib4ri-bentobox-label">Empa</label>
					<div id="lib4ri-bentobox-linkset-3-3-2" class="lib4ri-bentobox-linkset" title="institutes:Empa:People;institutes:Empa:Fulltext"><div class="lib4ri-search-anim-block">&nbsp;</div></div>
				</div>
				<div class="lib4ri-bentobox-container">
					<label class="lib4ri-bentobox-label">PSI</label>
					<div id="lib4ri-bentobox-linkset-3-3-3" class="lib4ri-bentobox-linkset" title="institutes:PSI:People;institutes:PSI:Fulltext"><div class="lib4ri-search-anim-block">&nbsp;</div></div>
				</div>
				<div class="lib4ri-bentobox-container">
					<label class="lib4ri-bentobox-label">WSL</label>
					<div id="lib4ri-bentobox-linkset-3-3-4" class="lib4ri-bentobox-linkset" title="institutes:WSL:People;institutes:WSL:Fulltext"><div class="lib4ri-search-anim-block">&nbsp;</div></div>
				</div>
			</div>

		</div><!-- end of "lib4ri-result-container-3" -->


	<!-- ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ END OF ALL TABS ^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^^ -->
	</div><!-- end of "lib4ri-tab-container" -->

</div><!-- end of div id="lib4ri-websearch-body" -->


<script type="text/javascript"><!--
// Add search form + show the intended tab when the page is loaded:
lib4riSearchFormAdd();
lib4riSearchTabToggle();
lib4riSearchFormTabChoice();
//--></script>

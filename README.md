# lab-6-starter
	
*SPECS
	* [Full Specs Doc](http://courses.cs.washington.edu/courses/cse154/16au/homework/8/spec.pdf)
	* [Extra Features Spec](http://courses.cs.washington.edu/courses/cse154/16au/homework/8/spec-extra.pdf)	
	
	<div id="hw7" class="assignmentarea delayed" >
		<span class="showdate" style="display: none">Week8 Fri 1:00 PM</span>

		<table class="homeworktable">

            
			<tr>
				<th>Specification:</th>
				<td>

					<ul>
						<li>
							<a href="homework/8/spec.pdf"><img class="icon" src="images/icon_pdf.gif" alt="icon" /> Specification</a>
						</li>
						<li>
							<a href="homework/8/spec-extra.pdf"><img class="icon" src="images/icon_pdf.gif" alt="icon" /> Extra Features Specification</a>
						</li>
						<li style="margin-top: 0.5em">
							<a href="hw8-faq.shtml"><img class="icon" src="images/icon_html.gif" alt="icon" /> Frequently Asked Questions</a>
						</li>
						<!--<li>
							<a class="popup" href="https://catalyst.uw.edu/gopost/area/aeobourn/138776"><img class="icon" src="images/message_board_icon.png" alt="icon" /> Message Board</a> (please do not post solution code)
						</li>-->
					</ul>
				</td>
			</tr>

			<tr>
				<th>Resources:</th>

				<td>
					<ul>
						<li>
							<a href="homework/8/mymdb.phps"><img class="icon" src="images/icon_php.gif" alt="icon" /> mymdb.php</a> (site front page; you should modify this as necessary)
						</li>

						<li>
							<a href="https://webster.cs.washington.edu/images/kevinbacon/background.png"><img class="icon" src="images/icon_png.gif" alt="icon" /> background.png</a>,
							<a href="https://webster.cs.washington.edu/images/kevinbacon/banner-background.png"><img class="icon" src="images/icon_png.gif" alt="icon" /> banner-background.png</a>,
							<a href="https://webster.cs.washington.edu/images/kevinbacon/favicon.png"><img class="icon" src="images/icon_png.gif" alt="icon" /> favicon.png</a>,
							<a href="https://webster.cs.washington.edu/images/kevinbacon/kevin_bacon.jpg"><img class="icon" src="images/icon_jpg.gif" alt="icon" /> kevin_bacon.jpg</a>,
							<a href="https://webster.cs.washington.edu/images/kevinbacon/mymdb.png"><img class="icon" src="images/icon_png.gif" alt="icon" /> mymdb.png</a>
							(images; don't need to be downloaded)
						</li>
					</ul>
				</td>
			</tr>

			<tr>
				<th>Expected Output:</th>
				<td>
					<div style="margin-bottom: 1em">
						(Your page does not need to exactly match these expected outputs; see spec.  But your query results should be the same.)
					</div>

					<ul>
						<li>
							initial page:
							<a href="homework/8/output/out-0-initial.png">
								<img class="icon" src="images/icon_png.gif" alt="icon" />
								mymdb.php</a>
						</li>

						<li>
							some outputs from imdb_small (text only):
							<a href="homework/8/output/imdb_small_output.txt">
								<img class="icon" src="images/icon_txt.gif" alt="icon" />
								imdb_small_output.txt</a>
						</li>

						<li>
							Kevin Spacey:
							<a href="homework/8/output/out-1-kevin-spacey-all.png">
								<img class="icon" src="images/icon_png.gif" alt="icon" />
								all</a>,
							<a href="homework/8/output/out-1-kevin-spacey-kevin.png">
								<img class="icon" src="images/icon_png.gif" alt="icon" />
								w/ Kevin</a>
						</li>

						<li>
							Tom Cruise:
							<a href="homework/8/output/out-2-tom-cruise-all.png">
								<img class="icon" src="images/icon_png.gif" alt="icon" />
								all</a>,
							<a href="homework/8/output/out-2-tom-cruise-kevin.png">
								<img class="icon" src="images/icon_png.gif" alt="icon" />
								w/ Kevin</a>
						</li>

						<li>
							Julia Roberts:
							<a href="homework/8/output/out-3-julia-roberts-all.png">
								<img class="icon" src="images/icon_png.gif" alt="icon" />
								all</a>,
							<a href="homework/8/output/out-3-julia-roberts-kevin.png">
								<img class="icon" src="images/icon_png.gif" alt="icon" />
								w/ Kevin</a>
						</li>

						<li>
							Julie Andrews:
							<a href="homework/8/output/out-4-julie-andrews-all.png">
								<img class="icon" src="images/icon_png.gif" alt="icon" />
								all</a>,
							<a href="homework/8/output/out-4-julie-andrews-kevin.png">
								<img class="icon" src="images/icon_png.gif" alt="icon" />
								w/ Kevin</a>
						</li>

						<li>
							GU pearce:
							<a href="homework/8/output/out-5-gu-pearce-all.png">
								<img class="icon" src="images/icon_png.gif" alt="icon" />
								all</a> (an approximate name match)
						</li>

						<li>
							Stuart Reges:
							<a href="homework/8/output/out-6-stuart-reges-all.png">
								<img class="icon" src="images/icon_png.gif" alt="icon" />
								all</a> (an actor who is not found)
						</li>
				<!--		<li>
							<a class="popup" href="https://webster.cs.washington.edu/tools/difftool.php?homework=hw5"><img class="icon" src="images/diff_icon.gif" alt="icon" /> Web Page Comparison Tool</a>
					</li> -->
					</ul>
				</td>
			</tr>

			<tr>
				<th>Extra Output:</th>
				<td>
					<ul>
						<li>
							Scott 'Carrot Top' Thompson:
							<a href="homework/8/output/out-7-carrot-top-all.png">
								<img class="icon" src="images/icon_png.gif" alt="icon" />
								all</a>,
							<a href="homework/8/output/out-7-carrot-top-kevin.png">
								<img class="icon" src="images/icon_png.gif" alt="icon" />
								w/ Kevin</a>  (for students who do the validation feature)
						</li>
					</ul>
				</td>
			</tr>

			<tr>
				<th>Links:</th>
				<td>
					<ul>
						<li>
							<a href="http://en.wikipedia.org/wiki/Six_degrees_of_kevin_bacon">Wikipedia - Six Degrees of Kevin Bacon</a>
						</li>
						<li>
							<a href="http://oracleofbacon.org/">Oracle of Bacon</a> - a real implementation of the Six Degrees of Kevin Bacon
						</li>
						<li>
							<a href="http://oracleofbacon.org/center_list.php">Oracle of Bacon - stats on possible "center" actors</a>
						</li>
					</ul>
				</td>
			</tr>
		</table>
	</div>
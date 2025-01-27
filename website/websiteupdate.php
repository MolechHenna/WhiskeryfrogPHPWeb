<?php
include '../php/version.php';
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <meta name="description" content="List of most of the games played by Whiskeryfrog in his channel.">
    <title>Whiskeryfrog / Website Updates</title>
    <link rel="stylesheet" href="../css/style.css">
    <link rel="icon" href="../images/whiskeryface.png" type="image/x-icon">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4TctnWMn13TZye+giMm8e2LwA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
</head>

<body>
    <main>
        <div class="topPanel" id="topPage">
            <a href="../index"><i class="fa-solid fa-house"></i>
                <div class="smallscreen"> Home</div>
            </a>
            <a href="#" onclick="history.back()"><i class="fa-solid fa-circle-left"></i>
                <div class="smallscreen"> Go Back</div>
            </a>
            <div class="rightSide">
                <a href="../website/websiteupdate">
                    <div>V<?php echo  $version; ?></div>
                </a>
            </div>
        </div>

        <div class="containerMainplus">
            <div class="limiter" style="color: white;"><br>
                <span class="bigtext">WEBSITE UPDATES</span>
            </div>
            <div class=" theTop">
                <header>
                    <div class="topPanel1">
                        <input type="text" id="searchInput" placeholder="Search version">
                        <select id="sortSelect" class="my-select-menu">
                            <option value="newest">Newest to Oldest</option>
                            <option value="oldest">Oldest to Newest</option>
                        </select>
                        <label for="sortSelect" style="display: none;">Version Sort</label>
                    </div>
                </header>
            </div>

            <div id="anchorgroupContainer">
                <a href="#" class="anchorgroup col">
                    <div class="containerMain">
                        <span class="bigtext">Update 1.1.0 - Terraria Update
                            Release</span>
                        <span class="bigtext smaller">July 9, 2024</span>
                        <hr class="linebreaker2">
                        <ul>
                            <li>Finished the Terraria section of the website.
                            </li>
                            <li>Changed styling.
                            </li>
                            <li>Added a previous and next button in each episode for easier navigation.
                            </li>
                            <li>Added a footer section for each page of the website.
                            </li>
                        </ul>
                    </div>
                </a>
                <a href="#" class="anchorgroup col">
                    <div class="containerMain">
                        <span class="bigtext"><span style="color: yellow;">Update 1.0.0</span> - Leafgreen Full
                            Release</span>
                        <span class="bigtext smaller">June 30, 2024</span>
                        <hr class="linebreaker2">
                        <ul>
                            <li>Finished the LeafGreen section of the website.
                            </li>
                            <li>Bug fixes.
                            </li>
                            <li>Changed the structure of the website on the backend.
                            </li>
                        </ul>
                    </div>
                </a>
                <a href="#" class="anchorgroup col">
                    <div class="containerMain">
                        <span class="bigtext">Update 0.5.0 - LeafGreen Complete</span>
                        <span class="bigtext smaller">June 24, 2024</span>
                        <hr class="linebreaker2">
                        <ul>
                            <li>Finished the LeafGreen section of the website.
                            </li>
                            <li>Note: This will be the last update on the Github version of the website as I will be
                                migrating this whole website to a different language in order to utilize server-side
                                scripting within my website as Github does not allow server-side scripting within its
                                Github Pages offer. All API keys utilized in this version of the website will all be
                                removed.
                            </li>
                        </ul>
                    </div>
                </a>
                <a href="#" class="anchorgroup col">
                    <div class="containerMain">
                        <span class="bigtext">Update 0.4.5 - More Optimization</span>
                        <span class="bigtext smaller">June 16, 2024</span>
                        <hr class="linebreaker2">
                        <ul>
                            <li>Removed the show and hide button for videos since the video loading per episode has been
                                properly optimized.
                            </li>
                            <li>Changed the file format of banner images from .png to .webp.
                            </li>
                        </ul>
                    </div>
                </a>
                <a href="#" class="anchorgroup col">
                    <div class="containerMain">
                        <span class="bigtext">Update 0.4.4 - Mild Optimization Update</span>
                        <span class="bigtext smaller">June 15, 2024</span>
                        <hr class="linebreaker2">
                        <ul>
                            <li>Changed the display of Youtube video from iframe to Youtube lite embed
                            </li>
                        </ul>
                    </div>
                </a>
                <a href="#" class="anchorgroup col">
                    <div class="containerMain">
                        <span class="bigtext">Update 0.4.3 - Changes in a hurry</span>
                        <span class="bigtext smaller">June 14, 2024</span>
                        <hr class="linebreaker2">
                        <ul>
                            <li>Removed the background of teh logo in the introduction of the Pokemon Leafgreen page
                            </li>
                            <li>Removed the "Dark Mode" feature and made it the default look of the whole website
                                because it looks way better in my opinion.
                            </li>
                        </ul>
                    </div>
                </a>
                <a href="#" class="anchorgroup col">
                    <div class="containerMain">
                        <span class="bigtext">Update 0.4.2 - Better Introduction</span>
                        <span class="bigtext smaller">June 14, 2024</span>
                        <hr class="linebreaker2">
                        <ul>
                            <li>Changed the image for the landing page where it shows you all of the games included in
                                the playthrough page.
                            </li>
                            <li>Changed the difficulty indicator for trainers from stars to colored meter.
                            </li>
                            <li>Updated the introduction to be more informative where it shows the function of widgets
                                throughout that webpage.
                            </li>
                        </ul>
                    </div>
                </a>
                <a href="#" class="anchorgroup col">
                    <div class="containerMain">
                        <span class="bigtext">Update 0.4.1 - Added Changes</span>
                        <span class="bigtext smaller">June 13, 2024</span>
                        <hr class="linebreaker2">
                        <ul>
                            <li>Changed the table layout for the deaths.
                            </li>
                            <li>Changed the image of Pokemon for Insignificant trainers.
                            </li>
                            <li>The browser now remembers whether you clicked the show/hide video and the caught/all
                                encounters buttons.
                            </li>
                        </ul>
                    </div>
                </a>
                <a href="#" class="anchorgroup col">
                    <div class="containerMain">
                        <span class="bigtext">Update 0.4.0 - Added New features</span>
                        <span class="bigtext smaller">June 12, 2024</span>
                        <hr class="linebreaker2">
                        <ul>
                            <li>Changed table layout for the Pokemon encounters per area to be more informative and
                                adds insight to each possible encounter.
                            </li>
                            <li>You can now toggle the Pokemon per area whether you want to only see the caught
                                Pokemon or all possible encounters.
                            </li>
                            <li>Also added a toggle for the video itself whether you want it shown or hidden in the
                                screen.
                            </li>
                        </ul>
                    </div>
                </a>
                <a href="#" class="anchorgroup col">
                    <div class="containerMain">
                        <span class="bigtext">Update 0.3.2 - Even more Javascript</span>
                        <span class="bigtext smaller">May 28, 2024</span>
                        <hr class="linebreaker2">
                        <ul>
                            <li>Turned some sections into javascript for maintainable site for the developer(me).
                            </li>

                        </ul>
                    </div>
                </a>
                <a href="#" class="anchorgroup col">
                    <div class="containerMain">
                        <span class="bigtext">Update 0.3.1 - Remove PHP</span>
                        <span class="bigtext smaller">May 28, 2024</span>
                        <hr class="linebreaker2">
                        <ul>
                            <li>Removed any PHP in the code so the full website is accessable in GitHub Pages.</li>
                            <li>Added sub-container within each route for individual trainer in order to separate
                                them better.</li>
                            <li>Trainer party member are now toggleable. You can toggle them by clicking the
                                sub-container itself.</li>

                        </ul>
                    </div>
                </a>
                <a href="#" class="anchorgroup col">
                    <div class="containerMain">
                        <span class="bigtext">Update 0.3.0 - Less HTML</span>
                        <span class="bigtext smaller">May 15, 2024</span>
                        <hr class="linebreaker2">
                        <ul>
                            <li>Change the structure of the website to be more javscript-centric to make it more
                                readable and managable (for the developer).</li>
                        </ul>
                    </div>
                </a>
                <a href="#" class="anchorgroup col">
                    <div class="containerMain">
                        <span class="bigtext">Update 0.2.1 - More content</span>
                        <span class="bigtext smaller">April 11, 2024</span>
                        <hr class="linebreaker2">
                        <ul>
                            <li>More leafgreen CONTENT!</li>
                        </ul>
                    </div>
                </a>
                <a href="#" class="anchorgroup col">
                    <div class="containerMain">
                        <span class="bigtext">Update 0.2.0 - The PHP change</span>
                        <span class="bigtext smaller">April 6, 2024</span>
                        <hr class="linebreaker2">
                        <ul>
                            <li>Changed the structure of the whole website to PHP in order to use server-side
                                features for certain things on the website.</li>
                        </ul>
                    </div>
                </a>
                <a href="#" class="anchorgroup col">
                    <div class="containerMain">
                        <span class="bigtext">Update 0.1.6 - The Table question</span>
                        <span class="bigtext smaller">April 6, 2024</span>
                        <hr class="linebreaker2">
                        <ul>
                            <li>Changed the Pokemon cards within leafgreen to tables for a cleaner look</li>
                        </ul>
                    </div>
                </a>
                <a href="#" class="anchorgroup col">
                    <div class="containerMain">
                        <span class="bigtext">Update 0.1.5 - LeafgreenProgress</span>
                        <span class="bigtext smaller">April 4, 2024</span>
                        <hr class="linebreaker2">
                        <ul>
                            <li>Finished the introduction to Pokemon Leafgreen Nuzlocke section</li>
                            <li>Decent progress with episode 1 of Pokemon LF Nuzlocke such as adding possible
                                encounters within an episode.</li>
                        </ul>
                    </div>
                </a>
                <a href="#" class="anchorgroup col">
                    <div class="containerMain">
                        <span class="bigtext">Update 0.1.4</span>
                        <span class="bigtext smaller">April 2, 2024</span>
                        <hr class="linebreaker2">
                        <ul>
                            <li>Added Pokemon Leafgreen Nuzlocke section</li>
                        </ul>
                    </div>
                </a>
                <a href="#" class="anchorgroup col">
                    <div class="containerMain">
                        <span class="bigtext">Update 0.1.3</span>
                        <span class="bigtext smaller">April 1, 2024</span>
                        <hr class="linebreaker2">
                        <ul>
                            <li>Changed the border-radius of the images within the cards in the playthrough secion
                            </li>
                            <li>Added an animated gif to the cards in the playthrough section when hovered over</li>
                            <li>Added search function within the playthrough section</li>
                        </ul>
                    </div>
                </a>
                <a href="#" class="anchorgroup col">
                    <div class="containerMain">
                        <span class="bigtext">Update 0.1.2</span>
                        <span class="bigtext smaller">March 31, 2024</span>
                        <hr class="linebreaker2">
                        <ul>
                            <li>Added functionality to the walkthrough card</li>
                            <li>Added images to specific cards in the walkthrough page</li>
                            <li>Changed the box shadow for each card</li>
                        </ul>
                    </div>
                </a>
                <a href="#" class="anchorgroup col">
                    <div class="containerMain">
                        <span class="bigtext">Update 0.1.1</span>
                        <span class="bigtext smaller">March 13, 2024</span>
                        <hr class="linebreaker2">
                        <ul>
                            <li>Added dark theme mode for the website</li>
                            <li>The Website card in the landing page now has a function which takes you to a page
                                where updates for the website will be shown</li>
                            <li>Basic landing page functions</li>
                        </ul>
                    </div>
                </a>

                <a href="#" class="anchorgroup col" id="noupdate">
                    <div class="containerMain">
                        <span class="bigtext">No Update available</span>
                    </div>
                </a>
            </div>
        </div>
        <footer>
            <div class="footer">
                <div class="leftside">
                    <div class="smallscreen"> Support me on:</div>
                    <a href="https://ko-fi.com/whiskeryfrog" target="_blank">
                        <i class="fas fa-ko-fi"></i>
                    </a>
                </div>
                <div class="rightSideF">
                    <div class="smallscreen">Follow me on:</div>
                    <a href="https://www.youtube.com/channel/UCWQhZn7Z-zg7VI_wpOLNKvA" target="_blank">
                        <i class="fa-brands fa-youtube"></i>
                    </a>
                    <a href="https://odysee.com/@Whiskeryfrog" target="_blank">
                        <i class="fa-brands fa-odysee"></i>
                    </a>
                    <a href="https://github.com/Whiskeryfrog" target="_blank">
                        <i class="fa-brands fa-github"></i>
                    </a>
                </div>
            </div>
        </footer>
    </main>
    <!--
    <a href="#topPage" id="arrowButton" class="arrowButton">
        <i class="fa-solid fa-arrow-up"></i>
    </a>
-->
    <script src="../js/app.js"></script>
</body>

</html>
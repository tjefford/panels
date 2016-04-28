<?php // Deny direct access to file
defined( 'SitePath' ) or die( 'No Direct Access Allowed' ); ?>

<div class="section " id="settings">
    <div class="wrap">
        <h2 class="center">Settings</h2>
        <br/>
        <p>Setting up Panels is super easy. Below are the variables you will need to provide on <em>config.php</em>.</p>
        <table>
            <tr class="top">
                <th>Name</th>
                <th>Type</th>
                <th>Description</th>
            </tr>
            <tr>
                <td>$title</td>
                <td>String</td>
                <td>The title of your website.</td>
            </tr>
            <tr>
                <td>$author</td>
                <td>String</td>
                <td>Most likely your name, or the site owner (for SEO).</td>
            </tr>
            <tr>
                <td>$description</td>
                <td>String</td>
                <td>A breif description about the website. Again for SEO.</td>
            </tr>
            <tr>
                <td>$GA</td>
                <td>String</td>
                <td>Your Google Analytics site ID to track page views.</td>
            </tr>
            <tr>
                <td>$panels</td>
                <td>Array</td>
                <td>
                  <div class="left">Name of panel =></div>
                  <div class="right">[Hex Color value, location of panel file]</div>
                  <div class="clear"></div>
                </td>
            </tr>
        </table>
    </div>
</div>

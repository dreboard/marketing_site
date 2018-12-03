<?php

use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Database\Migrations\Migration;

class CreateTemplatesTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('templates', function (Blueprint $table) {

   /*         `templateID` int(10) NOT NULL AUTO_INCREMENT,
  `templateName` varchar(100) COLLATE utf8_unicode_ci NOT NULL,
  `template` text COLLATE utf8_unicode_ci NOT NULL,
  `category` varchar(50) COLLATE utf8_unicode_ci NOT NULL,
  `templateCols` int(1) NOT NULL,
  `templateImg` varchar(255) COLLATE utf8_unicode_ci NOT NULL,
  `templateCode` varchar(20) COLLATE utf8_unicode_ci NOT NULL,
  `background` text COLLATE utf8_unicode_ci NOT NULL,
  `price` decimal(5,2) NOT NULL DEFAULT '0.00',
  `preview` text COLLATE utf8_unicode_ci NOT NULL,
  `seriesID` int(10) NOT NULL DEFAULT '0',
  `att` varchar(22) COLLATE utf8_unicode_ci NOT NULL DEFAULT 'None',*/

            $table->increments('id');
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('templates');
    }
}

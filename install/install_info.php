<?php header('Content-Type: text/html; charset=UTF-8');
?><!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<META http-equiv=Content-Type content="text/html; charset=UTF-8">
<title>Οδηγίες Εγκατάστασης Πλατφόρμας Open eClass 2.4</title>
<link href="../template/classic/theme.css" rel="stylesheet" type="text/css" />
<style type="text/css">
p {
 text-align: justify;
}
</style>
  </head>
  <body>
  
  <div id="container" style="padding: 30px;">
  <div id="header"> 

<a href="http://www.openeclass.org/" title="Open eClass" alt="Open eClass" class="logo"></a></div>

    <p class="title1">Οδηγίες Εγκατάστασης Πλατφόρμας Open eClass 2.4</p>
<p>Η πλατφόρμα <b>Open eClass</b> είναι ένα ολοκληρωμένο Σύστημα Διαχείρισης Ηλεκτρονικών Μαθημάτων και αποτελεί την πρόταση του Ακαδημαϊκού Διαδικτύου GUnet για την υποστήριξη της Υπηρεσίας Ασύγχρονης Τηλεκπαίδευσης. Αναπτύχθηκε από την Ομάδα Ασύγχρονης Τηλεκπαίδευσης του Ακαδημαϊκού Διαδικτύου, υποστηρίζεται κεντρικά από το GUnet και διανέμεται ελεύθερα ως Λογισμικό Ανοικτού Κώδικα.</p>
    <p>
      Η Πλατφόρμα Ασύγχρονης Τηλεκπαίδευσης <b>Open eClass
      </b> έχει δοκιμαστεί και λειτουργεί κανονικά
    </p>
    <ul>
      <li>Σε περιβάλλοντα MsWindows (<b>Windows NT</b>, <b>Windows
      2000</b>, <b>Windows XP</b>, <b>Windows 2003</b>, <b>Windows Vista</b>, <b>Windows 7</b>, <b>Windows 2008</b>)
      </li>
      <li>Σε διάφορες διανομές Linux (π.χ. <b>RedHat</b>, <b>CentOS</b>,
      <b>Debian</b>, <b>Ubuntu</b>, <b>OpenSuse</b> κ.λπ.)
      </li>
      <li>Σε άλλα περιβάλλοντα UNIX (π.χ. <b>Solaris</b>).
      </li>
    </ul>
    <p class="sub_title1">Στη συνέχεια παρατίθονται αναλυτικά οι οδηγίες
    εγκατάστασης της πλατφόρμας</p>
    <ul>
      <li><a href="#before">Ενέργειες πριν την εγκατάσταση - Προαπαιτούμενα</a></li>
      <li><a href="#unix">Για περιβάλλοντα Unix / Linux </a> </li>
      <li><a href="#win">Για περιβάλλοντα MsWindows</a></li>
      <li><a href="#after">Ενέργειες μετά την εγκατάσταση</a></li>
	<ul>
	<li><a href="#after_f">Αλλαγή δοκιμαστικών σχολών</a></li>
	<li><a href="#after_l">Αλλαγή λογότυπου</a></li>
	<li><a href="#after_m">Αλλαγή μηνυμάτων</a></li>
	<li><a href="#after_math">Υποστήριξη μαθηματικών συμβόλων</a></li>
	<li><a href="#after_lang">Υποστήριξη άλλων γλωσσών</a></li>
	<li><a href="#after_reg">Εγγραφή χρηστών μέσω αίτησης</a></li>
	<li><a href="#after_pma">PhpMyAdmin</a></li>
	<li><a href="#after_tbl_config">Ρυθμίσεις του πίνακα config</a></li>
	<li><a href="#after_other">Άλλες ρυθμίσεις</a></li>
	</ul>
    </ul>
    <p class="title1">
      <a name="before" id="before">Ενέργειες πριν την εγκατάσταση -
      Προαπαιτούμενα:</a>
    </p>
    <p>
	Για την εγκατάσταση της πλατφόρμας Open eClass 2.4, απαιτείται η ύπαρξη και η καλή λειτουργία μιας σειράς συστημάτων και εφαρμογών. Αυτές είναι οι εξής:
    </p>
    <p class="sub_title1">
      1. Web Server (<a href="http://httpd.apache.org/" target="_blank">Apache</a> 2.x)
    </p>
    <p>
      Ο Apache πρέπει να μπορεί να χειριστεί σελίδες τύπου
      <em>.php .inc</em> Αν δεν τον έχετε ρυθμίσει,
      τότε αρκεί στο αρχείο ρυθμίσεων <code>httpd.conf</code> να προσθέσετε
      την ακόλουθη γραμμή:
    </p>
    <pre>AddType application/x-httpd-php .php .inc</pre>
<p> Επίσης, θα πρέπει να ορίσετε ότι η προκαθορισμένη κωδικοποίηση των σελίδων 
  που στέλνει ο Web Server είναι <em>UTF-8</em>. Στον Apache, 
  αυτό μπορείτε να το κάνετε βάζοντας στο αρχείο <code>httpd.conf</code> την δήλωση: 
</p>
    <pre>AddDefaultCharset UTF-8</pre>
    
<p> Καλό είναι, για λόγους ασφαλείας, να απενεργοποιήσετε το directory 
  indexing για τους υποκαταλόγους που θα εγκατασταθεί το eClass. Στο αρχείο <code>httpd.conf</code> 
  προσθέστε στα Options την επιλογή <em>-Indexes</em>. Αν για παράδειγμα το eClass 
  θα εγκατασταθεί στο /var/www/eclass τότε προσθέστε στο <code>httpd.conf</code> την 
  παρακάτω δήλωση: </p>
    <pre>
&lt;Directory /var/www/eclass&gt;
................
Options -Indexes
................
&lt;/Directory&gt;
</pre>
    <div class="info">
        <b>Μόνο για Windows</b>.
	<p align='justify'>Αν στον υπολογιστή σας τρέχει o
        WebServer της Microsoft (<em>IIS</em>) πρέπει να τον
        απενεργοποιήσετε. Πηγαίνετε στο
        <em>Start-&gt;Programs-&gt;Administrative
        Tools-&gt;Services</em> και σταματήστε την υπηρεσία
        <em>«World Wide Web Publishing Service»</em>, κάνοντας δεξί
        κλικ και επιλέγοντας <em>«stop»</em>. Για να
        απενεργοποιηθεί ο <em>IIS</em> μόνιμα, κάντε δεξί κλικ στην
        παραπάνω υπηρεσία και επιλέξτε <em>«Disabled»</em> από τον
        κατάλογο επιλογών <em>«Startup type»</em>.
	Να σημειωθεί ότι η πλατφόρμα λειτουργεί κανονικά και σε περιβάλλον IIS αλλά δεν έχει δοκιμαστεί εκτενώς.</p>
    </div>
<p class="sub_title1">2. <a href="http://www.php.net" target="_blank">PHP</a> (εκδόσεις &gt;= 5.0) 
</p>
<p> Η πλατφόρμα λειτουργεί χωρίς προβλήματα με εκδόσεις &gt;= <em>5.0 </em></p>
<p> Ταυτόχρονα με την εγκατάσταση της PHP, απαιτείται και ενεργοποίηση της υποστήριξης 
  του Apache για PHP. Σημειώστε ότι στη PHP, θα πρέπει να ενεργοποιήσετε την υποστήριξη 
  για τα modules <em>mysql, zlib, pcre, mbstring</em> και <em>gd</em>. Αν επιθυμείτε να χρησιμοποιήσετε 
  κάποιον εξυπηρέτη LDAP για την πιστοποίηση των χρηστών, τότε θα πρέπει να ενεργοποιήσετε 
  και το module για την υποστήριξη <em>ldap</em>. Είναι πιθανόν η διανομή της PHP που χρησιμοποιείτε
	να έχει ενσωματωμένη υποστήριξη για κάποια από τα παραπάνω modules. </p>
    <p>
      Κατά την εγκατάσταση του eClass ελέγχεται αν πληρούνται τα
      παραπάνω.
    </p>
<p> Θα πρέπει επίσης να ορίσετε στο αρχείο <code>php.ini</code> τις παραμέτρους: 
</p>
<pre>
short_open_tag = on
magic_quotes_gpc = on</pre>
    <p>
      Όσον αφορά το μέγιστο μέγεθος των αρχείων που θα επιτρέπεται
      να γίνονται upload στην πλατφόρμα, μπορείτε να το ρυθμίσετε
      με τις παρακάτω γραμμές στο αρχείο <code>php.ini</code>.
      Προτείνεται:
    </p>
    <ul>
      <li>
        <code>upload_max_filesize = 40M</code> (η προκαθορισμένη
        τιμή είναι 2M)
      </li>
      <li>
        <code>memory_limit = 25M</code> (η προκαθορισμένη είναι 8M)
      </li>
      <li>
        <code>post_max_size = 45M</code> (η προκαθορισμένη είναι
        8M)
      </li>
      <li>
        <code>max_execution_time = 100</code> (η προκαθορισμένη
        είναι 30 sec)
      </li>
    </ul>
<p> Επίσης, αν τυχόν, εμφανιστεί κάποιο notice της PHP κατά την διάρκεια της εφαρμογής, 
  αναζητήστε στο αρχείο <code>php.ini</code> την μεταβλητή <em>display_errors</em> και 
  αλλάξτε την τιμή της σε: </p>

    <pre>display_errors = Off</pre>
    <div class="info">
     <b>Μόνο για Windows</b>.
      <ul>
        <li>Στα windows extensions βγάζετε τα σχόλια (;) από τη
        γραμμή  <code>extension = php_ldap.dll</code>
        </li>
        <li>Αλλάξτε την μεταβλητή <em>session.save_path</em> σε ένα
        path το οποίο υπάρχει <em>(π.χ.
        session.save_path=c:\winnt\temp\)</em>. Βεβαιωθείτε επίσης,
        ότι ο apache έχει δικαιώματα πρόσβασης σε αυτό.
        </li>
        <li>Συμπληρώστε τον SMTP server που σας εξυπηρετεί για
        αποστολή e-mail, π.χ. <code>SMTP = mail.gunet.gr</code>
        </li>
        <li>Συμπληρώστε μια έγκυρη email διεύθυνση αποστολέα στο πεδίο <code>sendmail_from</code></li> 
      </ul>
    </div>
    <p>
      Τέλος, καλό είναι να ορίσετε κι εδώ την προκαθορισμένη
      κωδικοποίηση με τη γραμμή: <code>default_charset =
      "UTF-8"</code>
    </p>
    <p>
      Μόλις ολοκληρώσετε τις αλλαγές σας, επανεκκινήστε τον apache.
    </p>
<p class="sub_title1"> 3. <a href="http://www.mysql.com" target="_blank">MySQL</a> (εκδόσεις 4.1.x 
  ή 5.x) </p>
    <p>
      Παράλληλα με την εγκατάσταση της MySQL θα πρέπει να
      δημιουργηθεί ένας λογαριασμός χρήστη (user account), με
      δικαιώματα δημιουργίας και διαγραφής βάσης δεδομένων.
    </p>
<p class="sub_title1">
      4. <a href="http://www.sendmail.org" target=
      "_blank">sendmail</a> ή <a href="http://www.postfix.org"
      target="_blank">postfix</a> (προαιρετικά)
    </p>
    <p>
      Σε μερικές λειτουργίες της πλατφόρμας (π.χ. κατά την εγγραφή
      των χρηστών), γίνεται αποστολή mail. Αν δεν λειτουργεί κάποια
      εφαρμογή αποστολής mail, τα mail της πλατφόρμας δεν θα
      αποστέλλονται πουθενά.
    </p>
    <div class="info">
     <b>Μόνο για Windows:</b>
      <p>
         Εναλλακτικά, για να εγκαταστήσετε
        τα παραπάνω, μπορείτε να χρησιμοποιήσετε το πακέτο
       <a href="http://www.easyphp.org" target="_blank">EasyPHP</a> ή το πακέτο <a href="http://www.apachefriends.org/en/xampp-windows.html" target="_blank">XAMPP</a>.
      </p>
    </div>
        <p class="title1">
      <a name="unix" id="unix">Για περιβάλλοντα Unix / Linux</a>
    </p>
    <p class='sub_title1'>
      Διαδικασία εγκατάστασης
    </p>
    <p>
      Αποσυμπιέστε το αρχείο <b>openeclass-2.4.tar.gz</b> με
      την εντολή <code>tar xzvf openeclass-2.4.tar.gz</code>. O
      υποκατάλογος που δημιουργείται κατά την αποσυμπίεση του
      πακέτου, περιέχει όλα τα αρχεία της εφαρμογής και πρέπει να τοποθετηθεί σε σημείο προσβάσιμο από
      τον web server.
    </p>
    <p>
	Αν ο web server τρέχει σαν χρήστης www-data, για να ρυθμίσετε τα δικαιώματα πρόσβασης
	μπορείτε να δώσετε τις παρακάτω εντολές (σαν χρήστης root):
    </p><pre>
		cd (path του eclass) (π.χ. cd /var/www/html/openeclass)
		chown -R www-data *
		find ./ -type f -exec chmod 664 {} \;
		find ./ -type d -exec chmod 775 {} \;
		</pre>
    <p>
      Για να ξεκινήσετε την εγκατάσταση, επισκεφτείτε με κάποιον
      web browser την διεύθυνση που βρίσκεται ο υποκατάλογος
      /install/. Αν για παράδειγμα ο κύριος κατάλογος της
      εφαρμογής (δηλαδή /var/www/html/openeclass/) βρίσκεται στη διεύθυνση
      <code>http://www.example.gr/openeclass/</code>, η διεύθυνση που πρέπει να
      πληκτρολογήσετε είναι η
    <code>http://www.example.gr/openeclass/install/</code>
    Στη συνέχεια ακολουθείστε τα βήματα του οδηγού εγκατάστασης της
    πλατφόρμας όπως αυτά παρουσιάζονται στην οθόνη σας. Σημειώστε
    ότι κατά την διαδικασίας εγκατάστασης θα σας ζητηθούν τα
    παρακάτω:</p>

<ul>
  <li>Το όνομα του υπολογιστή όπου είναι εγκατεστημένη η MySQL (π.χ. openeclass.org, 
    ή localhost - αν είναι στον ίδιο υπολογιστή) </li>
  <li>Ένα "Όνομα Χρήστη" και "Συνθηματικό" για ένα χρήστη της MySQL με δικαιώματα δημιουργίας και διαγραφής βάσεων</li>
  <li>Όνομα για την κύρια βάση δεδομένων του eClass (το default είναι eclass). 
    Αλλάξτε το οπωσδήποτε, αν υπάρχει ήδη μια βάση δεδομένων με το ίδιο όνομα. 
  </li>
  <li>URL της πλατφόρμας (όπως αυτό θα εμφανίζεται στον browser μετά την εγκατάσταση 
    π.χ. http://www.openeclass.org/eclass/) </li>
  <li>Το path των αρχείων στον server. Βεβαιωθείτε ότι το path είναι σωστό (π.χ. 
    /var/www/html/). </li>
  <li>Όνομα / Επώνυμο και email Διαχειριστή. </li>
  <li>Όνομα Χρήστη και Συνθηματικό Διαχειριστή.</li>
  <li>Το όνομα που θέλετε να δώσετε στην πλατφόρμα (π.χ. Open eClass) </li>
  <li>Tηλέφωνο και email helpdesk (σε αυτό το email στέλνονται οι διάφορες αιτήσεις, 
    θα μπορούσε να είναι το ίδιο με του διαχειριστή). </li>
  <li>Όνομα και διεύθυνση του ιδρύματος σας.</li>
</ul>
    <p class="title1">
      <a name="win" id="win">Για περιβάλλοντα MsWindows</a>
    </p>
    <p class='sub_title1'>
      Διαδικασία εγκατάστασης
    </p>
    <p>
      Αποσυμπιέστε το αρχείο openeclass-2.4.zip. O υποκατάλογος που δημιουργείται
      κατά την αποσυμπίεση του πακέτου, περιέχει όλα τα αρχεία της εφαρμογής και πρέπει
      να τοποθετηθεί σε σημείο προσβάσιμο από τον web server.
    </p>
    <p>
      Για να ξεκινήσετε την εγκατάσταση, επισκεφτείτε με κάποιον
      web browser την διεύθυνση που βρίσκεται ο υποκατάλογος
      /install/. Αν για παράδειγμα ο κυρίως κατάλογος της
      εφαρμογής (δηλαδή C:\Program Files\Apache\htdocs/openeclass\) βρίσκεται στη διεύθυνση
      <code>http://www.example.gr/eclass/,</code> η διεύθυνση που πρέπει να
      πληκτρολογήσετε είναι η
    <code>http://www.example.gr/openeclass/install/</code> Στη συνέχεια ακολουθείστε τα βήματα του οδηγού εγκατάστασης
      της πλατφόρμας όπως αυτά παρουσιάζονται στην οθόνη σας.
    </p>
    <p>
      Σημειώστε ότι κατά την διαδικασίας εγκατάστασης θα σας
      ζητηθούν τα παρακάτω:
    </p>
<ul>
  <li>Το όνομα του υπολογιστή όπου είναι εγκατεστημένη η MySQL (π.χ. openeclass.org, 
    localhost - αν είναι στον ίδιο υπολογιστή) </li>
  <li>Ένα "Όνομα Χρήστη" και "Συνθηματικό" για ένα χρήστη της MySQL με δικαιώματα δημιουργίας και διαγραφής βάσεων </li>
  <li>Όνομα για την κύρια βάση δεδομένων του eClass (το default είναι eclass). 
    Αλλάξτε το οπωσδήποτε, αν υπάρχει ήδη μια βάση δεδομένων με το ίδιο όνομα. 
  </li>
  <li>URL της πλατφόρμας (όπως αυτό θα εμφανίζεται στον browser μετά την εγκατάσταση 
    π.χ. http://www.openeclass.org/eclass/) </li>
  <li>Το path των αρχείων στον server. Βεβαιωθείτε ότι το path είναι σωστό (π.χ. 
    C:\Program Files\Apache\htdocs\). </li>
  <li>Όνομα / Επώνυμο και email Διαχειριστή. </li>
  <li>Όνομα Χρήστη και Συνθηματικό Διαχειριστή </li>
  <li>Το όνομα που θέλετε να δώσετε στην πλατφόρμα (π.χ. Open eClass) </li>
  <li>Tηλέφωνο και email helpdesk (σε αυτό το email έρχονται οι διάφορες αιτήσεις 
    θα μπορούσε να είναι το ίδιο με του διαχειριστή). </li>
  <li>Όνομα και διεύθυνση του ιδρύματος σας.</li>
</ul>
    <p class="title1">
      <a name="after" id="after">Ενέργειες μετά την εγκατάσταση:</a>
    </p>
       <p class='sub_title1'><a name="after_f">Αλλαγή δοκιμαστικών σχολών</a></p>
       <p>To OpeneClass κατά την εγκατάσταση εισάγει 3 δοκιμαστικές / γενικές Σχολές 
   /Τμήματα. (Τμήμα 1 με κωδικό TMA, Τμήμα 2 με κωδικό TMB κ.λπ.). Εσείς θα πρέπει 
   να τις αλλάξετε και να τις προσαρμόσετε στις Σχολές-Τμήματα του Ιδρύματός 
   σας. Αυτό μπορείτε να το κάνετε μέσα από το διαχειριστικό εργαλείο. Περισσότερες 
   και αναλυτικότερες οδηγίες για τις ενέργειες αυτές, μπορείτε να βρείτε στο 
   εγχειρίδιο του Διαχειριστή (βρίσκεται μέσα στο διαχειριστικό εργαλείο).</p>
<p class='sub_title1'><a name="after_l">Αλλαγή λογότυπου</a></p>  
    <p> Aν κάποιο ίδρυμα θέλει να αντικαταστήσει το αρχικό λογότυπο του OpeneClass 
      με το δικό, αρκεί να αντικαταστήσει την εικόνα </p>
    <code>(path του eClass)/template/classic/img/logo_openeclass.png</code> 
    <p> με την δικιά του. </p>
<p class='sub_title1'><a name="after_m">Αλλαγή μηνυμάτων</a></p>
<p>Αν θέλετε να αλλάξετε οποιοδήποτε μήνυμα της πλατφόρμας συνίσταται να το κάνετε ως εξής:
Δημιουργήστε ένα αρχείο τύπου .php με όνομα <em>greek.inc.php</em> (ή <em>english.inc.php</em> αν πρόκειται για αγγλικά μηνύματα)
και τοποθετήστε το στον κατάλογο <em>(path του eclass)/config/</em>.
Αναζητήστε το όνομα της μεταβλητής που περιέχει το μήνυμα που θέλετε να αλλάξετε και απλά αναθέστε της το καινούριο μήνυμα.
Π.χ. Αν θέλουμε να αλλάξουμε το μήνυμα <pre>$langAboutText = "Η έκδοση της πλατφόρμας είναι";</pre>
σε <pre>$langAboutText = "Τρέχουσα έκδοση της πλατφόρμας";</pre>
απλά δημιουργούμε
το <em>greek.inc.php</em> στον κατάλογo (path του eclass)/config/ ως εξής:
<pre>
&lt;?
$langAboutText = "Τρέχουσα έκδοση της πλατφόρμας";
?&gt;
</pre>
Με τον παραπάνω τρόπο εξασφαλίζεται η διατήρηση των τροποποιημένων μηνυμάτων από μελλοντικές αναβαθμίσεις της πλατφόρμας.
<p>
Μπορείτε να αλλάξετε τα ονόματα των βασικών ρόλων των χρηστών της πλατφόρμας αλλάζοντας το αρχείο μηνυμάτων <em>(path του eClass)/modules/lang/greek/common.inc.php</em>
</p>
<p>Επίσης σημειώστε ότι μπορείτε να προσθέσετε κείμενο (π.χ. ενημερωτικού περιεχομένου)
στα αριστερά και δεξιά της αρχικής σελίδας της πλατφόρμας.
Για το σκοπό αυτό, αναθέστε την τιμή - μήνυμα στις μεταβλητές <em>$langExtrasLeft</em> και <em>$langExtrasRight</em> αντίστοιχα, που βρίσκονται στο <em>(path του eClass)/modules/lang/greek/common.inc.php</em>
</p>
<p class='sub_title1'><a name="after_math">Υποστήριξη μαθηματικών συμβόλων</a></p>
<p>Η πλατφόρμα υποστηρίζει την συγγραφή μαθηματικών συμβόλων στα υποσύστηματα "Ασκήσεις", "Περιοχές συζητήσεων" και "Ανακοινώσεις".
Συγκεκριμένα στο υποσύστημα "Ασκήσεις" μπορείτε να βάλετε μαθηματικά σύμβολα στα πεδία "Περιγραφή Άσκησης"
όταν δημιουργείτε μια καινούρια άσκηση (ή όταν την διορθώνετε),
στο πεδίο "Προαιρετικό Σχόλιο" όταν δημιουργείτε μια καινούρια ερώτηση σε μια άσκηση (ή όταν την διορθώνετε).
Στο υποσύστημα "Περιοχές συζητήσεων" όταν συντάσσετε ένα καινούριο μήνυμα ή όταν απαντάτε σε αυτό
και στο υποσύστημα "Ανακοινώσεις" όταν δημιουργείτε μια ανακοίνωση.
Τα μαθηματικά σύμβολα πρέπει απαραίτητα να περικλείονται με τα tags <em>&lt;m&gt;</em> και <em>&lt;/m&gt;</em>.
Π.χ. πληκτρολογώντας
<pre>
&lt;m&gt;sqrt{x-1}&lt;/m&gt;
</pre>
θα σχηματιστεί η τετραγωνική ρίζα του x-1. Για την σύνταξη των υπόλοιπων μαθηματικών συμβόλων
ανατρέξτε στο <em>http://(url της εγκατάστασης)/manuals/PhpMathPublisherHelp.pdf</em> 
</p>

<p class='sub_title1'><a name="after_lang">Υποστήριξη άλλων γλωσσών</a></p>
<p>
Η πλατφόρμα διαθέτει υποστήριξη για τα Αγγλικά και τα Ισπανικά. Αν θέλετε να απενεργοποιήσετε κάποια από αυτές τις γλώσσες,
προσθέστε στο αρχείο ρυθμίσεων config.php την γραμμή <pre>$active_ui_languages = array('el', 'en');</pre> (αν θέλετε να απενεργοποιήσετε τα ισπανικά) ή
<pre>$active_ui_languages = array('el', 'es');</pre> (αν θέλετε να απενεργοποιήσετε τα αγγλικά).</p>
<p>Εξ' ορισμού η παραπάνω μεταβλητή έχει την τιμή <pre>$active_ui_languages = array('el', 'en', 'es');</pre> δηλαδή υποστήριξη και των τριών γλωσσών.
</p>

<p class='sub_title1'><a name="after_reg">Εγγραφή χρηστών μέσω αίτησης</a></p>
    <p> Στο αρχείο <em>config.php</em> ορίζεται η μεταβλητή <em>close_user_registration</em> 
      η οποία εξ'ορισμού έχει τιμή <em>FALSE</em>. Αλλάζοντας την σε τιμή <em>TRUE</em> 
      η εγγραφή χρηστών με δικαιώματα "φοιτητή" δεν θα είναι πλέον ελεύθερη. Οι 
      χρήστες για να αποκτήσουν λογαριασμό στην πλατφόρμα θα ακολουθούν πλέον 
      διαδικασία παρόμοια με τη δημιουργία λογαριασμού "καθηγητή" δηλαδή θα συμπληρώνουν 
      μια φόρμα-αίτηση δημουργίας λογαριασμού φοιτητή. Η αίτηση εξετάζεται από 
      τον διαχειριστή ο οποίος εγκρίνει την αίτηση, οπότε δημιουργεί τον λογαριασμό, 
      ή την απορρίπτει. Αν δεν επιθυμείτε να αλλάξει ο τρόπος εγγραφής φοιτητών 
      αφήστε την όπως είναι. (δηλαδή στην τιμή <em>FALSE</em>). 
</p>
<p class='sub_title1'><a name="after_pma">PhpMyAdmin</a></p>
<p> Η πλατφόρμα διανέμεται με το διαχειριστικό εργαλείο phpMyAdmin. Για λόγους 
      ασφαλείας, η πρόσβαση στο phpMyAdmin γίνεται μέσω cookies του browser. Αν 
      θέλετε να το αλλάξετε, ανατρέξτε στο αρχείο ρυθμίσεων <em>config.inc.php</em> 
      του phpMyAdmin.</p>

<p class='sub_title1'><a name="after_tbl_config">Ρυθμίσεις του πίνακα config</a></p>
<p>Το eClass κατά την εγκατάσταση, δημιουργεί στην κεντρική βάση δεδομένων τον πίνακα <em>config</em>.
Σε αυτό τον πίνακα, κάθε γραμμή του αντιστοιχεί σε μία (προαιρετική) ρύθμιση της πλατφόρμας. Οι ρυθμίσεις αυτές
ζητούνται από το πρόγραμμα εγκατάστασης. Αν δεν τις αλλάξετε έχουν κάποιες τιμές εξ´ ορισμού.
Αργότερα μπορούν να τροποποιηθούν, από το διαχειριστικό εργαλείο της πλατφόρμας. Αυτές είναι:</p>
<ul>
 <li><em>email_required</em>: Το email των χρηστών, κατά την εγγραφή τους, θα είναι υποχρεωτικό.</li>
 <li><em>am_required</em>: Ο αριθμός μητρώου των χρηστών, κατά την εγγραφή τους, θα είναι υποχρεωτικός.</li>
 <li><em>dropbox_allow_student_to_student</em>: Θα επιτρέπεται η ανταλλαγή αρχείων μεταξύ χρηστών στο υποσύστημα 'Ανταλλαγή αρχείων'.</li>
 <li><em>dont_display_login_form</em>: Δεν θα εμφανίζεται στην αρχική σελίδα της πλατφόρμας η οθόνη σύνδεσης και θα εμφανίζεται ένας σύνδεσμος προς αυτήν.</li>
 <li><em>block_username_change</em>: Δεν θα επιτρέπεται να αλλάζουν οι χρήστες το 'όνομα χρήστη'.</li>
 <li><em>display_captcha</em>: Να εμφανίζεται κωδικός ασφάλειας κατά την εγγραφή νέων χρηστών.</li>
 <li><em>insert_xml_metadata</em>: Να επιτρέπεται στους εκπαιδευτές να ανεβάσουν μεταδεδομένα σε αρχεία του υποσύστηματος 'Εγγραφα'.</li>
</ul>
Εξ' ορισμού, καμμία ρύθμιση από τις παραπάνω, δεν είναι ενεργοποιημένη.</p>
<p class='sub_title1'><a name="after_other">Άλλες ρυθμίσεις</a></p>
<p> Αν θέλετε να χρησιμοποιήσετε την πλατφόρμα με Web server που έχει ενεργοποιημένη την υποστήριξη SSL 
(π.χ. https://eclass.gunet.gr) μπορείτε να το κάνετε δηλώνοντας στο <em>config.php</em> την μεταβλητή
<em>urlSecure</em>. π.χ. <code>$urlSecure = "https://eclass.gunet.gr"</code>. Περισσότερες και αναλυτικότερες 
οδηγίες για τις ενέργειες αυτές, μπορείτε να βρείτε στο εγχειρίδιο του Διαχειριστή (βρίσκεται μέσα στο διαχειριστικό εργαλείο).
</p>
  <p>Σημειώστε, ότι οι χρήστες της πλατφόρμας θα πρέπει να έχουν την javascript ενεργοποιημένη στον browser τους.</p> 
    <ul>
      <li>Για τους χρήστες του Internet Explorer, από τα μενού επιλέξτε διαδοχικά 
        <em>Internet Options/Security/Custom Level/Security Options</em> και μαρκάρετε 
        την επιλογή <em>"Scripting of java applets"</em>. </li>
      <li>Για τους χρήστες του <em>Firefox</em>, επιλέξτε διαδοχικά <em>Edit / 
        Preferences / Web features</em> και μαρκάρετε την επιλογή <em>"Enable 
        JavaScript".</em> </li>
    </ul>
    </p>
    <div class="alert1"> 
       <b>Μόνο για συστήματα Unix/Linux:</b>
        <p align='justify'>Αφού ολοκληρωθεί η εγκατάσταση,συνίσταται για λόγους ασφαλείας, να αλλάξετε τα δικαιώματα πρόσβασης 
          των αρχείων <code>/config/config.php</code> και <code>/install/index.php</code> 
          και να επιτρέψτε μόνο ανάγνωση (τα permissions των παραπάνω θα πρέπει 
            να είναι 444). Π.χ.:
          <pre>chmod 444 /config/config.php /install/index.php</pre>
    </div>
    </div>	
  </body>
</html>

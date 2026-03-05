<?php
include_once('../config/symbini.php');
if($LANG_TAG == 'en' || !file_exists($SERVER_ROOT.'/content/lang/templates/usagepolicy.' . $LANG_TAG . '.php'))
	include_once($SERVER_ROOT . '/content/lang/templates/usagepolicy.en.php');
else include_once($SERVER_ROOT . '/content/lang/templates/usagepolicy.' . $LANG_TAG . '.php');
include_once ($SERVER_ROOT . '/classes/utilities/GeneralUtil.php');
header("Content-Type: text/html; charset=" . $CHARSET);
$serverHost = GeneralUtil::getDomain();
?>
<!DOCTYPE html>
<html lang="<?= $LANG_TAG ?>">

<head>
	<title><?= $DEFAULT_TITLE . ($LANG_TAG=='es' ? ' Política de Uso de Datos' : ($LANG_TAG=='fr' ? " Directives d'utilisation des données" : ' Data Usage Guidelines')) ?></title>
	<?php

	include_once($SERVER_ROOT . '/includes/head.php');
	?>
</head>

<body>
	<?php
	$displayLeftMenu = true;
	include($SERVER_ROOT . '/includes/header.php');
	?>
	<div class="navpath">
		<a href="<?php echo htmlspecialchars($CLIENT_ROOT, ENT_COMPAT | ENT_HTML401 | ENT_SUBSTITUTE); ?>/index.php"><?= $LANG['HOME'] ?></a> &gt;&gt;
		<b><?= $LANG['DATA_USAGE_GUIDELINES'] ?></b>
	</div>
	<!-- This is inner text! -->
	<main id="innertext">

		<?php
		if($LANG_TAG=='es'){
		?>
		<h1 class="page-heading">Normas para el uso adecuado de datos</h1><br />
		<h2>Recomendaciones Para Citar</h2>
		<div style="margin:10px">
			Sugerimos usar el siguiente formato para citar los datos descargados desde del Consorcio de Herbarios de Líquenes:
			</div>
			<h3>Citación General:</h3>
			<div style="margin:10px;">
				<?php 
				echo 'Consorcio de Herbarios de Líquenes'; 
				echo ' ('.date('Y').') '; 
				echo 'http//:'.$_SERVER['HTTP_HOST'].$CLIENT_ROOT.(substr($CLIENT_ROOT,-1)=='/'?'':'/').'index.php. '; 
				echo 'Fecha de acceso: '.date('d m Y').'. ';
				?>
			</div>
			<h3>Uso de datos de ocurrencia para instituciones específicas:</h3>
			<div style="margin:10px;">
				Datos de biodiversidad de ocurrencias de especímenes publicado por &lt;listado de colecciones&gt;
				(obtenido de <?php echo $DEFAULT_TITLE; ?>, 
				<?php echo 'http//:'.$_SERVER['HTTP_HOST'].$CLIENT_ROOT.(substr($CLIENT_ROOT,-1)=='/'?'':'/').'index.php'; ?>, DD-MM-YYYY)<br/><br/>
				<b>Por ejemplo:</b><br/>
				Datos de biodiversidad de ocurrencias de especímenes publicado por 
				publicado por el Herbario de Líquenes de la Universidad de Talca, Chile
				(obtenido de <?php echo $DEFAULT_TITLE; ?>, 
				<?php echo 'http//:'.$_SERVER['HTTP_HOST'].$CLIENT_ROOT.(substr($CLIENT_ROOT,-1)=='/'?'':'/').'index.php, '.date('Y-m-d').')'; ?>
			</div>
			<h3>Citar el Tesauro Taxonómico Central:</h3>
			<div style="margin:10px;">
				<?= 'Bungartz, F. & Perlmutter, G. (' . date('Y') . ') Tesauro taxonómico central de nombres aceptados y sus sinónimos, 
				mantenido por el Consorcio de Herbarios de Líquenes(con contribuciones de P. Kirk, K. Bensch, U. Søchting, A. Fryday, 
				R. Lücking y otros). ' . 'https//:' . $_SERVER['HTTP_HOST'] . $CLIENT_ROOT . 
				(substr($CLIENT_ROOT,-1)=='/' ? '' : '/') . '/taxa/taxonomy/taxonomydisplay.php. Consultado ' . date('Y-m-d') . '.' ?>
			</div>
			<h3>Citar el Glosario:</h3>
			<div style="margin:10px">
				<?= 'Bungartz, F. (' . date('Y') . ') Glosario de terminología de líquenes del Consorcio de Herbarios de Líquenes 
				(basado en definiciones originalmente publicadas en la Lichen Flora of the Greater Sonoran Desert Region y el LIAS 
				Glossary, con imágenes compartidas por B. McCune, S. Yang, A.A. Spielmann,  y F. Schumm, y cromatogramas y datos de la química 
				secundaria por J.A. Elix y F. Schumm). https//:' . $_SERVER['HTTP_HOST'] . $CLIENT_ROOT . 
				(substr($CLIENT_ROOT,-1)=='/' ? '' : '/') . '/glossary/index.php. Consultado ' . date('Y-m-d') . '.' ?>
			</div>
		</div>
		<a name="occurrences"></a>
		<h2>Política de Uso de datos de ocurrencia</h2>
		<div style="margin:10px;">
			<ul>
				<li>
					Aunque el Consorcio de Herbarios de Líquenes mantiene la infraestructura para compartir datos 
					de biodiversidad, no somos responsables de la calidad de estos datos. La información disponible aquí está disponible 
					como “tal cual”. Quiere decir que, es responsabilidad de las instituciones individuales y no del Consorcio en general 
					mantener una alta calidad de sus datos. Si usted encuentra errores es necesario comunicarse directamente con el dueño 
					de los datos, es decir, el curador de la colección específica.
				</li>
				<li>
					El Consorcio <i>no</i> asume responsabilidad alguna por el mal uso o mala interpretación de los datos, 
					tampoco somos responsables de información incompleta o inadecuada. 
				</li>
				<li>
					Consideramos que es una cuestión de ética profesional reconocer el trabajo de otros científicos y citar el uso 
					de sus datos en cualquier publicación. Sugerimos contactar al investigador original directamente y pedir permiso 
					para el uso de sus datos.
				</li>
				<li>
					Solicitamos no redistribuir datos de nuestra plataforma sin permiso del dueño de esta información original. 
					Sin embargo, usted puede publicar un <i>enlace</i> a nuestra página web y recomendamos citar el Consorcio como la 
					fuente de la información que usted utilice.
				</li>
				<li>
					Los dueños de los datos compartidas por cada colección participando en el Consorcio de Herbarios de Líquenes 
					son las instituciones o personas compartiendo esta información.
				</li>
			</ul>
		</div>
		<a name="images"></a>
		<h2>Imágenes</h2>
		<div style="margin:15px;">
			Las imágenes disponibles de nuestro sitio web fueron generosamente proporcionadas por sus dueños para promover la educación y la ciencia. 
			Los autores mantienen todos sus derechos sobre ellas. Hay algunas fotos con copyright tradicional pero a menos que se indique lo contrario, 
			las imágenes están disponibles bajo licencia de Atribución-Compartir Igual, No portada (<a href="http://creativecommons.org/licenses/by-sa/3.0/">CC BY-SA 3.0</a>): 
			Eso quiere decir que usted es libre de compartir (copiar y redistribuir el material en cualquier medio o formato) y adaptar 
			(remezclar, transformar y construir a partir del material para cualquier propósito, incluso comercialmente). Atribución: 
			Usted debe dar crédito de manera adecuada, brindar un enlace a la licencia, e indicar si se han realizado cambios. 
			Puede hacerlo en cualquier forma razonable, pero no de forma tal que sugiera que usted o su uso tienen el apoyo de la licenciante. 
			CompartirIgual: Si remezcla, transforma o crea a partir del material, debe distribuir su contribución bajo la misma licencia del original. 
			No hay restricciones adicionales (no puede aplicar términos legales ni medidas tecnológicas que restrinjan legalmente a otros a hacer 
			cualquier uso permitido por la licencia).
		</div>
		<h2>Información general sobre los datos de ocurrencias de especímenes y sus imágenes</h2> 
		<div style="margin:15px;">
			Los especímenes científicos depositados en las colecciones del Consorcio fueron preparados con mucho cuidado para mantenerlos por unos 
			cientos de años para su investigación científica. Algunos herbarios del Consorcio mantienen especímenes colectados hace más de 100 años. 
			Muchas de las especies representadas por estos especímenes ya no se encuentran en su sitio de colecta original. Compartir estas muestras 
			en forma digital, como imagen por el Consorcio, puede ayudar en la preservación de estas muestras valiosas sin la necesidad de inadvertidamente 
			causar daño por su manipulación.<br></br>
			Por favor, antes de recolectar muestras usted necesita averiguar si es necesario tener permiso del dueño de la tierra donde se hace la recolección. 
			Para especies raras y/o amenazadas puede ser necesario obtener además un permiso adicional. En los diferentes países diferentes leyes aplican y 
			obviamente es necesario seguir todos los trámites y reglamentos necesarios. Generalmente es muy buena práctica coordinar sus esfuerzos de colecta 
			directamente con las instituciones locales, regionales y nacionales que manejan colecciones científicas. El Consorcio no es legalmente responsable 
			por los datos compartidos. Todas las bases de datos disponibles en este portal de biodiversidad, son compartidas asumiendo que todas las instituciones 
			participantes en el Consorcio ya tienen todos los permisos legales necesarios.
		</div>
		<h2>Exoneración de Responsabilidad con respeto a Lenguaje Ofensiva</h2> 
		<div style="margin:15px;">
			El Consorcio de Herbarios de Líquenes mantiene información sobre especímenes históricos de sensibilidad cultural. 
			Algunas colecciones tienen más de 200 años, y fueron recolectadas en todo el mundo. Algunos datos de estos especímenes pueden ser considerados 
			de lenguaje ofensivo. Esta información no refleja el actual punto de vista de Consorcio sino la mentalidad cultural y situación social durante la 
			época cuando los especímenes fueron recolectados y catalogados.
		</div>
		<?php
		} else if($LANG_TAG=='fr'){
		?>
		<h1 class="page-heading">Lignes directrices pour une utilisation acceptable des données</h1><br />
		<h2>Formats de citation recommandés</h2>
		<div style="margin:10px">
		Utilisez l'un des formats suivants pour citer les données extraites du réseau du Consortium des herbiers à lichens:
			</div>
			<h3>Citation Générale:</h3>
			<div style="margin:10px;">
				<?php 
				echo 'Consortium des herbiers à lichens'; 
				echo ' ('.date('Y').') '; 
				echo 'https//:'.$_SERVER['HTTP_HOST'].$CLIENT_ROOT.(substr($CLIENT_ROOT,-1)=='/'?'':'/').'index.php. '; 
				echo 'Consulté le: '.date('d m Y').'. ';
				?>
			</div>
			<h3>Utilisation des données d'occurrence provenant d'institutions spécifiques:</h3>
			<div style="margin:10px;">
				Données d'occurrence sur la biodiversité publiées par: <Liste des collections> (Consulté via le portail de données du Consortium des herbiers à lichens, <a href="http://lichenportal.org/portal/index.php">http://lichenportal.org/portal/index.php</a>, AAAA-MM-JJ)</br>
				<br><b>Par exemple:</b><br/>
				Données sur la biodiversité provenant d'occurrences de spécimens publiées par l'Herbier de lichens de l'Université de Talca, Chili
				(extraites du <?php echo $DEFAULT_TITLE; ?>, 
				<?php echo 'https//:'.$_SERVER['HTTP_HOST'].$CLIENT_ROOT.(substr($CLIENT_ROOT,-1)=='/'?'':'/').'index.php, '.date('Y-m-d').')'; ?>
			</div>
			<h3>Citation du Thésaurus taxonomique central:</h3>
			<div style="margin:10px;">
				<?= "Bungartz, F. & Perlmutter, G. (" . date('Y') . ") Thésaurus taxonomique central des noms acceptés et de leurs synonymes, 
				géré par le Consortium des Herbiers de Lichens (avec les contributions de P. Kirk, K. Bensch, U. Søchting, A. Fryday, R. Lücking et d'autres). "
				. 'https//:' . $_SERVER['HTTP_HOST'] . $CLIENT_ROOT . 
				(substr($CLIENT_ROOT,-1)=='/' ? '' : '/') . '/taxa/taxonomy/taxonomydisplay.php. Consulté ' . date('Y-m-d') . '.' ?>
			</div>
			<h3>Citation du glossaire:</h3>
			<div style="margin:10px">
				<?= 'Bungartz, F. (' . date('Y') . ') Glossaire de la terminologie des lichens fourni par le Consortium des Herbiers de Lichens 
				(basé sur les définitions initialement publiées dans Lichen Flora of the Greater Sonoran Desert Region et le glossaire du LIAS, 
				avec des images fournies par B. McCune, S. Yang, A.A. Spielmann et F. Schumm, et des données de chimie secondaire et des 
				chromatogrammes par J.A. Elix et F. Schumm). https//:' . $_SERVER['HTTP_HOST'] . $CLIENT_ROOT . 
				(substr($CLIENT_ROOT,-1)=='/' ? '' : '/') . '/glossary/index.php. Consulté ' . date('Y-m-d') . '.' ?>
			</div>
		</div>
		<a name="occurrences"></a>
		<h2>Politique d'utilisation des données d'occurrence</h2>
		<div style="margin:10px;">
			<ul>
				<li>
					Bien que le Consortium des Herbiers de Lichens mette tout en œuvre pour contrôler et documenter la qualité des 
					données qu'il publie, celles-ci sont mises à disposition « en l'état ». Tout signalement d'erreur dans les données 
					doit être adressé aux conservateurs et/ou gestionnaires de collections concernés.
				</li>
				<li>
					Le Consortium des Herbiers de Lichens décline toute responsabilité pour les dommages résultant d'une mauvaise utilisation 
					ou interprétation des données, ou d'erreurs ou omissions pouvant y figurer.
				</li>
				<li>
					Il est considéré comme une question d'éthique professionnelle de citer et de reconnaître les travaux d'autres scientifiques 
					ayant donné lieu à des données utilisées dans des recherches ultérieures. Nous encourageons les utilisateurs à contacter le 
					chercheur initial responsable des données auxquelles ils accèdent.
				</li>
				<li>
					Le Consortium des Herbiers de Lichens demande que les données de ce site ne soient pas redistribuées sans l'autorisation 
					écrite des propriétaires de ces données. Cependant, les liens ou références vers ce site peuvent être publiés librement.
				</li>
				<li>
					Chaque collection participant au Consortium des Herbiers de Lichens conserve l'entière propriété des données partagées ici.
				</li>
			</ul>
		</div>
		<a name="images"></a>
		<h2>Images</h2>
		<div style="margin:15px;">
			Les images de ce site web ont été généreusement mises à disposition par leurs propriétaires afin de promouvoir l'éducation et la recherche. 
			Les contributeurs conservent l'intégralité des droits d'auteur sur toutes leurs images. Cependant, sauf mention contraire, les auteurs ont accepté 
			de partager leurs images sous une licence Creative Commons Attribution-ShareAlike 3.0 Unported (<a href="http://creativecommons.org/licenses/by-sa/3.0/">CC BY-SA 3.0</a>). Les utilisateurs sont autorisés à partager 
			(copier et redistribuer le contenu sur tout support et dans tout format) et à l'adapter (remixer, transformer et développer le contenu à toutes fins, 
			même commerciales). Attribution: Vous devez mentionner la source, fournir un lien vers la licence et indiquer si des modifications ont été apportées. 
			Vous pouvez le faire de toute manière raisonnable, mais pas d'une façon qui suggérerait que le concédant vous soutient ou soutient votre utilisation. 
			Partage dans les mêmes conditions: Si vous remixez, transformez ou développez le contenu, vous devez distribuer vos contributions sous la même 
			licence que l'original. Aucune restriction supplémentaire n'est autorisée (vous ne pouvez pas appliquer de clauses légales ou de mesures techniques 
			empêchant légalement d'autres personnes d'effectuer les actions autorisées par la licence).
		</div>
		<h2>Notes sur les enregistrements et les images des spécimens</h2> 
		<div style="margin:15px;">
			Les spécimens sont utilisés pour la recherche scientifique et, grâce à une préparation soignée et à une utilisation rigoureuse, 
			ils peuvent durer des centaines d'années. Certaines collections contiennent des spécimens collectés il y a plus de 100 ans, qui 
			pourraient ne plus être retrouvés dans leur zone de collecte d'origine. La mise à disposition de ces spécimens sur le web sous forme d'images 
			améliore leur disponibilité et leur valeur sans augmenter les dommages accidentels causés par leur utilisation.
			Veuillez noter que la collecte de spécimens nécessite généralement l'autorisation du propriétaire foncier. Pour les espèces rares et menacées, 
			des permis supplémentaires peuvent également être requis. La législation peut varier selon les pays et le respect de ces réglementations est essentiel. 
			Il est préférable de coordonner ces efforts avec une institution régionale ou nationale qui gère des collections accessibles au public. Le Consortium 
			n'est pas légalement responsable des données partagées par les contributeurs. Tous les ensembles de données mis à disposition via ce portail de 
			données sur la biodiversité sont partagés ici sous réserve que les exigences légales de collecte soient respectées par les différentes institutions 
			participantes qui fournissent ces informations.
		</div>
		<h2>Avis de non-responsabilité concernant le langage offensant</h2> 
		<div style="margin:15px;">
			Le Consortium des Herbiers de Lichens peut contenir des spécimens et des documents historiques culturellement sensibles. Les collections 
			comprennent des spécimens datant de plus de 200 ans, collectés dans le monde entier. Certains documents peuvent également contenir des propos 
			offensants. Ces documents ne reflètent pas le point de vue actuel du Consortium des Herbiers de Lichens, mais plutôt les mentalités et les 
			circonstances sociales de l'époque où les spécimens ont été collectés ou catalogués.
		</div>
		<?php
		} else {
		?>
		<h1 class="page-heading">Guidelines for Acceptable Use of Data</h1><br />
		<h2>Recommended Citation Formats</h2>
		<div style="margin:10px">
			Use one of the following formats to cite data retrieved from the <?php echo $DEFAULT_TITLE; ?> network:
			</div>
			<h3>General Citation:</h3>
			<div style="margin:10px;">
				<?php 
				echo $DEFAULT_TITLE.' ('.date('Y').') '; 
				echo 'http//:'.$_SERVER['HTTP_HOST'].$CLIENT_ROOT.(substr($CLIENT_ROOT,-1)=='/'?'':'/').'index.php. '; 
				echo 'Accessed on '.date('F d').'. '; 
				?>
			</div>
			<h3>Usage of occurrence data from specific institutions:</h3>
			</div>
			<div style="margin:10px;">
				Biodiversity occurrence data published by: &lt;List of Collections&gt; 
				(Accessed through <?php echo $DEFAULT_TITLE; ?> Data Portal, 
				<?php echo 'http//:'.$_SERVER['HTTP_HOST'].$CLIENT_ROOT.(substr($CLIENT_ROOT,-1)=='/'?'':'/').'index.php'; ?>, YYYY-MM-DD)<br/><br/>
				<b>For example:</b><br/>
				Biodiversity occurrence data published by: 
				Arizona State University, Field Museum of Natural History, and New York Botanical Garden 
				(Accessed through <?php echo $DEFAULT_TITLE; ?> Data Portal, 
				<?php echo 'https//:'.$_SERVER['HTTP_HOST'].$CLIENT_ROOT.(substr($CLIENT_ROOT,-1)=='/'?'':'/').'index.php, '.date('Y-m-d').')'; ?>
			</div>
			<h3>Citing the Central Taxonomic Thesaurus:</h3>
			</div>
			<div style="margin:10px;">
				<?= 'Bungartz, F. & Perlmutter, G. (' . date('Y') . ') Central taxonomic thesaurus of accepted names and their 
				synonyms, maintained by the Consortium of Lichen Herbaria (with contributions by P. Kirk, K. Bensch, U. Søchting, A. 
				Fryday, R. Lücking, and others). ' . 'https//:' . $_SERVER['HTTP_HOST'] . $CLIENT_ROOT . 
				(substr($CLIENT_ROOT,-1)=='/' ? '' : '/') . '/taxa/taxonomy/taxonomydisplay.php. Accessed on ' . date('F j') . '.' ?>
			</div>
			<h3>Citing the Glossary:</h3>
			<div style="margin:10px">
				<?= 'Bungartz, F. (' . date('Y') . ') Glossary of lichen terminology provided by the Consortium of Lichen Herbaria 
				(based on definitions originally published in the Lichen Flora of the Greater Sonoran Desert Region and the LIAS 
				glossary, with image resources provided by B. McCune, S. Yang, A.A. Spielmann, and F. Schumm, and secondary chemistry data and 
				chormatograms by J.A. Elix, F. Schumm). https//:' . $_SERVER['HTTP_HOST'] . $CLIENT_ROOT . 
				(substr($CLIENT_ROOT,-1)=='/' ? '' : '/') . '/glossary/index.php. Accessed on ' . date('F j') . '.' ?>
			</div>
		</div>
		<a name="occurrences"></a>
		<h2>Occurrence Record Use Policy</h2>
		<div style="margin:10px;">
			<ul>
				<li>
					While the <?php echo $DEFAULT_TITLE; ?> will make every effort possible to control and document the quality 
					of the data it publishes, the data are made available "as is". Any report of errors in the data should be 
					directed to the appropriate curators and/or collections managers. 
				</li>
				<li>
					The <?php echo $DEFAULT_TITLE; ?> cannot assume responsibility for damages resulting from misuse or 
					misinterpretation of datasets or from errors or omissions that may exist in the data. 
				</li>
				<li>
					It is considered a matter of professional ethics to cite and acknowledge the work of other scientists that 
					has resulted in data used in subsequent research. We encourage users to 
					contact the original investigator responsible for the data that they are accessing. 
				</li>
				<li>
					The <?php echo $DEFAULT_TITLE; ?> asks that data are <i>not</i> redistributed from this site without written permission by the owners of these data sets. 
					However, links or references to this site may be freely posted.
				</li>
				<li>
					Every collection participating in the <?php echo $DEFAULT_TITLE; ?> maintains full ownership of the data shared here.
				</li>
			</ul>
		</div>
		<a name="images"></a>
		<h2>Images</h2>
		<div style="margin:15px;">
			Images within this website have been generously contributed by their owners to promote education and research. 
			Contributors retain full copyright for all of their images. However, unless specifically stated otherwise, authors 
			have agreed to share their images under a Creative Commons Attribution-ShareAlike 3.0 Unported (<a href="http://creativecommons.org/licenses/by-sa/3.0/">CC BY-SA 3.0</a>)  license: 
			Users are allowed to <b>share</b> (copy and redistribute the material in any medium or format) and <b>adapt</b> 
			(remix, transform, and build upon the material for any purpose, even commercially). Attribution: You must give appropriate credit, 
			provide a link to the license, and indicate if changes were made. You may do so in any reasonable manner, but not in any way that 
			suggests the licensor endorses you or your use. ShareAlike: If you remix, transform, or build upon the material, you must distribute 
			your contributions under the <b>same</b> license as the original. No additional restrictions (you may not apply legal terms or 
			technological measures that legally restrict others from doing anything the license permits). 
		</div>
		<h2>Notes on Specimen Records and Images</h2> 
		<div style="margin:15px;">
			Specimens are used for scientific research and because of skilled preparation and 
			careful use they may last for hundreds of years. Some collections have specimens 
			that were collected over 100 years ago that may no longer be found within the original collection area. 
			By making these specimens available on the web as images, their availability and 
			value improves without an increase in inadvertent damage caused by use. <br>
			Please note that collecting specimens in most cases will require permission of the landowner. 
			In the case of rare and endangered species, additional permits may also be required. In different countries, 
			different laws may apply and it should be obvious that these regulations need to be adhered to. It is best to 
			coordinate such efforts with a regional or national institution that manages publicly accessible collections. 
			The Consortium is not legally responsible for any data being shared by any contributor. All data sets made 
			available through this biodiversity data portal are shared here assuming that legal collection requirements 
			have been adhered to by the different participating institutions that provide this information.
		</div>
		<h2>Disclaimer Regarding Offensive Language</h2> 
		<div style="margin:15px;">
			<?php echo $DEFAULT_TITLE; ?> may contain specimens and
			historical records that are culturally sensitive. The collections include specimens
			dating back over 200 years collected from all around the world. Some records may also
			include offensive language. These records do not reflect <?php echo $DEFAULT_TITLE; ?>’s current viewpoint
			but rather the social attitudes and circumstances of the time period when specimens were collected or cataloged.
		</div> 
		<?php
		}
		?>
	</main>
	<?php
	include($SERVER_ROOT . '/includes/footer.php');
	?>
</body>
</html>
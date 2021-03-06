<?php

namespace NfqAkademija\RecipeBundle\DataFixtures\ORM;

use Doctrine\Common\DataFixtures\AbstractFixture;
use Doctrine\Common\DataFixtures\OrderedFixtureInterface;
use Doctrine\Common\Persistence\ObjectManager;
use NfqAkademija\RecipeBundle\Entity\Ingredient;

class LoadIngredientData extends AbstractFixture implements OrderedFixtureInterface
{
    /**
     * {@inheritDoc}
     */
    public function load(ObjectManager $manager)
    {

        $ingredients = [
            ['Abrikosai', 'ingredient-1'],
            ['Actas', 'ingredient-2'],
            ['Adžika', 'ingredient-3'],
            ['Agavos sirupas', 'ingredient-4'],
            ['Agrastai', 'ingredient-5'],
            ['Aguonos', 'ingredient-6'],
            ['Agurkai', 'ingredient-7'],
            ['Agurklė', 'ingredient-8'],
            ['Agurotis', 'ingredient-9'],
            ['Aitrieji pipirai', 'ingredient-10'],
            ['Aitrioji paprika', 'ingredient-11'],
            ['Ajerai', 'ingredient-12'],
            ['Aliejus', 'ingredient-13'],
            ['Alyvuogės', 'ingredient-14'],
            ['Alyvuogių aliejus', 'ingredient-15'],
            ['Alkoholis', 'ingredient-16'],
            ['Alus', 'ingredient-17'],
            ['Amaretas', 'ingredient-18'],
            ['Anakardžių riešutai', 'ingredient-19'],
            ['Ananasai', 'ingredient-20'],
            ['Ančiuviai', 'ingredient-21'],
            ['Anyžius', 'ingredient-22'],
            ['Antiena', 'ingredient-23'],
            ['Antienos krūtinėlė', 'ingredient-24'],
            ['Antis', 'ingredient-25'],
            ['Apelsinai', 'ingredient-26'],
            ['Apelsino žievelė', 'ingredient-27'],
            ['Apelsininiai pipirai', 'ingredient-28'],
            ['Apelsinų likeris', 'ingredient-29'],
            ['Apelsinų sultys', 'ingredient-30'],
            ['Aperityvas', 'ingredient-31'],
            ['Apyniai', 'ingredient-32'],
            ['Arbata', 'ingredient-33'],
            ['Arbūzai', 'ingredient-34'],
            ['Argula', 'ingredient-35'],
            ['Aronija', 'ingredient-36'],
            ['Artišokai', 'ingredient-37'],
            ['Asiūklis', 'ingredient-38'],
            ['Aštuonkojis', 'ingredient-39'],
            ['Augalinis aliejus', 'ingredient-40'],
            ['Austrės', 'ingredient-41'],
            ['Aviečių likeris', 'ingredient-42'],
            ['Aviena', 'ingredient-43'],
            ['Avietės', 'ingredient-44'],
            ['Avižiniai dribsniai', 'ingredient-45'],
            ['Avižos', 'ingredient-46'],
            ['Avokadai', 'ingredient-47'],
            ['Ąžuolas', 'ingredient-48'],
            ['BACARDI BLACK', 'ingredient-49'],
            ['BACARDI LIMON', 'ingredient-50'],
            ['BACARDI OAKHEART', 'ingredient-51'],
            ['BACARDI RAZZ', 'ingredient-52'],
            ['BACARDI RESERVA', 'ingredient-53'],
            ['BACARDI SUPERIOR', 'ingredient-54'],
            ['Baklažanai', 'ingredient-55'],
            ['Balanda', 'ingredient-56'],
            ['Baltas vynas', 'ingredient-57'],
            ['Baltieji pipirai', 'ingredient-58'],
            ['Balzaminis actas', 'ingredient-59'],
            ['Bambukų ūgliai', 'ingredient-60'],
            ['Bananai', 'ingredient-61'],
            ['Bandelės', 'ingredient-62'],
            ['Baravykai', 'ingredient-63'],
            ['Barštis sibirinis', 'ingredient-64'],
            ['Basturma', 'ingredient-65'],
            ['Batonas', 'ingredient-66'],
            ['Bazilikai', 'ingredient-67'],
            ['Bazilikas', 'ingredient-68'],
            ['Bekonas', 'ingredient-69'],
            ['Bertoletijų riešutai', 'ingredient-70'],
            ['Biskvitiniai piršteliai', 'ingredient-71'],
            ['Biteris', 'ingredient-72'],
            ['Bobausiai', 'ingredient-73'],
            ['Braškės', 'ingredient-74'],
            ['Braškių sirupas', 'ingredient-75'],
            ['Brendis', 'ingredient-76'],
            ['Briediena', 'ingredient-77'],
            ['Briuselio kopūstai', 'ingredient-78'],
            ['Brokoliai', 'ingredient-79'],
            ['Bruknės', 'ingredient-80'],
            ['Builis', 'ingredient-81'],
            ['Bulvės', 'ingredient-82'],
            ['Bulvytės fri', 'ingredient-83'],
            ['Burnotis', 'ingredient-84'],
            ['Burokėliai', 'ingredient-85'],
            ['Chalva', 'ingredient-86'],
            ['Ciberžolė', 'ingredient-87'],
            ['Cikorija', 'ingredient-88'],
            ['Cinamonas', 'ingredient-89'],
            ['Citrininiai pipirai', 'ingredient-90'],
            ['Citrinos', 'ingredient-91'],
            ['Citrinos rūgštis', 'ingredient-92'],
            ['Citrinos žievelė', 'ingredient-93'],
            ['Citrinų džemas', 'ingredient-94'],
            ['Citrinų sultys', 'ingredient-95'],
            ['Citrinžolė', 'ingredient-96'],
            ['Coca Cola', 'ingredient-97'],
            ['Cukatos', 'ingredient-98'],
            ['Cuki', 'ingredient-99'],
            ['Cukinija', 'ingredient-100'],
            ['Cukraus pudra', 'ingredient-101'],
            ['Cukraus sirupas', 'ingredient-102'],
            ['Cukrus', 'ingredient-103'],
            ['Churma', 'ingredient-104'],
            ['Čederio sūris', 'ingredient-105'],
            ['Čes', 'ingredient-106'],
            ['Česnakas', 'ingredient-107'],
            ['Čili pipiras', 'ingredient-108'],
            ['Čiobreli', 'ingredient-109'],
            ['Čiobreliai', 'ingredient-110'],
            ['Čiužutės', 'ingredient-111'],
            ['Daktariška dešra', 'ingredient-112'],
            ['Daržovės', 'ingredient-113'],
            ['Daši', 'ingredient-114'],
            ['Dašiai', 'ingredient-115'],
            ['Datulės', 'ingredient-116'],
            ['Degtinė', 'ingredient-117'],
            ['Dešra', 'ingredient-118'],
            ['Dešrelės', 'ingredient-119'],
            ['Detinė', 'ingredient-120'],
            ['Dilgėlės', 'ingredient-121'],
            ['Dižono garstyčios', 'ingredient-122'],
            ['Druksa', 'ingredient-123'],
            ['Druska', 'ingredient-124'],
            ['Dumplainiai', 'ingredient-125'],
            ['Dumplūnė', 'ingredient-126'],
            ['Duona', 'ingredient-127'],
            ['Duonmedis', 'ingredient-128'],
            ['Duonos trupiniai', 'ingredient-129'],
            ['Džemas', 'ingredient-130'],
            ['Džinas', 'ingredient-131'],
            ['Džiūvėsėliai', 'ingredient-132'],
            ['Ėriena', 'ingredient-133'],
            ['Eršketas', 'ingredient-134'],
            ['Erškėtis erškėtrožė', 'ingredient-135'],
            ['Ešerys', 'ingredient-136'],
            ['Faršas', 'ingredient-137'],
            ['Fazanas', 'ingredient-138'],
            ['Feichoja', 'ingredient-139'],
            ['Figos', 'ingredient-140'],
            ['Garstyčios', 'ingredient-141'],
            ['Garstyčių milteliai', 'ingredient-142'],
            ['Garšva', 'ingredient-143'],
            ['Gazuotas vanduo', 'ingredient-144'],
            ['Geldelės', 'ingredient-145'],
            ['Gelsvė', 'ingredient-146'],
            ['Gelteklės', 'ingredient-147'],
            ['Gervuogės', 'ingredient-148'],
            ['Gira', 'ingredient-149'],
            ['Girtuoklės', 'ingredient-150'],
            ['Gyslotis', 'ingredient-151'],
            ['Gluosnis', 'ingredient-152'],
            ['Graikiniai riešutai', 'ingredient-153'],
            ['Granatai', 'ingredient-154'],
            ['Granatų sultys', 'ingredient-155'],
            ['Gražgarstės', 'ingredient-156'],
            ['Greipfrutai', 'ingredient-157'],
            ['Grybai', 'ingredient-158'],
            ['Grietinė', 'ingredient-159'],
            ['Grietinėlė', 'ingredient-160'],
            ['Griežčiai', 'ingredient-161'],
            ['Grikiai', 'ingredient-162'],
            ['Grūdai', 'ingredient-163'],
            ['Grūzdai', 'ingredient-164'],
            ['Gudobelė', 'ingredient-165'],
            ['Guminukai', 'ingredient-166'],
            ['Gvazdikėliai', 'ingredient-167'],
            ['Ieva', 'ingredient-168'],
            ['Ikrai', 'ingredient-169'],
            ['Imbieras', 'ingredient-170'],
            ['Imbierinis alus', 'ingredient-171'],
            ['Imbierinis alus "Ginger Beer"', 'ingredient-172'],
            ['Imbierinis limonadas', 'ingredient-173'],
            ['Imbierinis limonadas "Ginger Ale"', 'ingredient-174'],
            ['Irisai', 'ingredient-175'],
            ['Išrūgos', 'ingredient-176'],
            ['Jalapenai', 'ingredient-177'],
            ['Japoniškas pipiras', 'ingredient-178'],
            ['Jaučio inkstai', 'ingredient-179'],
            ['Jaučio kepenys', 'ingredient-180'],
            ['Jaučio liežuvis', 'ingredient-181'],
            ['Jaučio plaučiai', 'ingredient-182'],
            ['Jautiena', 'ingredient-183'],
            ['Jautienos faršas', 'ingredient-184'],
            ['Jogurtas', 'ingredient-185'],
            ['Jogurto bakterijos raugas', 'ingredient-186'],
            ['Jonažolė', 'ingredient-187'],
            ['Judra', 'ingredient-188'],
            ['Juodieji pipirai', 'ingredient-189'],
            ['Juodieji serbentai', 'ingredient-190'],
            ['Juodųjų serbentų sultys', 'ingredient-191'],
            ['Juozažolė', 'ingredient-192'],
            ['Jūros dumblių lapai Nori', 'ingredient-193'],
            ['Jūros gėrybės', 'ingredient-194'],
            ['Jūros kopūstai', 'ingredient-195'],
            ['Jūros lydeka', 'ingredient-196'],
            ['Kadagio uogos', 'ingredient-197'],
            ['Kajeno pipiras', 'ingredient-198'],
            ['Kakava', 'ingredient-199'],
            ['Kalakutiena', 'ingredient-200'],
            ['Kalendra', 'ingredient-201'],
            ['Kaliaropės', 'ingredient-202'],
            ['Kalmarai', 'ingredient-203'],
            ['Kalpokai', 'ingredient-204'],
            ['Kalvadosas', 'ingredient-205'],
            ['Kamut kruopos', 'ingredient-206'],
            ['Kanapės', 'ingredient-207'],
            ['Kaparėliai', 'ingredient-208'],
            ['Kaparis', 'ingredient-209'],
            ['Karamelė', 'ingredient-210'],
            ['Kardamonas', 'ingredient-211'],
            ['Karis', 'ingredient-212'],
            ['Karosai', 'ingredient-213'],
            ['Karpis', 'ingredient-214'],
            ['Karšis', 'ingredient-215'],
            ['Katuogės', 'ingredient-216'],
            ['Kava', 'ingredient-217'],
            ['Kazlėkai', 'ingredient-218'],
            ['Kečupas', 'ingredient-219'],
            ['Ked', 'ingredient-220'],
            ['Kedro riešutai', 'ingredient-221'],
            ['Kefyras', 'ingredient-222'],
            ['Kelmučiai', 'ingredient-223'],
            ['Kepenėlės', 'ingredient-224'],
            ['Kepimo milteliai', 'ingredient-225'],
            ['Kepimo soda', 'ingredient-226'],
            ['Kiaulės ausys', 'ingredient-227'],
            ['Kiaulės galva', 'ingredient-228'],
            ['Kiaulės inkstai', 'ingredient-229'],
            ['Kiaulės kepenys', 'ingredient-230'],
            ['Kiaulės kojos', 'ingredient-231'],
            ['Kiaulės kumpis', 'ingredient-232'],
            ['Kiaulės liežuvis', 'ingredient-233'],
            ['Kiaulės smegenys', 'ingredient-234'],
            ['Kiaulės širdis', 'ingredient-235'],
            ['Kiauliena', 'ingredient-236'],
            ['Kiaulienos faršas', 'ingredient-237'],
            ['Kiaulienos lašiniai', 'ingredient-238'],
            ['Kiaulienos nugarinė', 'ingredient-239'],
            ['Kiaulienos sprandinė', 'ingredient-240'],
            ['Kiaulienos šoninė', 'ingredient-241'],
            ['Kiaulių žarnos', 'ingredient-242'],
            ['Kiaulpienė', 'ingredient-243'],
            ['Kiaušiniai', 'ingredient-244'],
            ['Kietasis sūris', 'ingredient-245'],
            ['Kininis finikas', 'ingredient-246'],
            ['Kininis kopūstas', 'ingredient-247'],
            ['Kiniškasis arbatmedis', 'ingredient-248'],
            ['Kinkanai', 'ingredient-249'],
            ['Kiselius', 'ingredient-250'],
            ['Kisielius', 'ingredient-251'],
            ['Kiškiena', 'ingredient-252'],
            ['Kiškio kopūstai', 'ingredient-253'],
            ['Kiviai', 'ingredient-254'],
            ['Klevas', 'ingredient-255'],
            ['Klevų sirupas', 'ingredient-256'],
            ['Kmynai', 'ingredient-257'],
            ['Knorr FIX mišinys spagečiams „Carbonara“', 'ingredient-258'],
            ['Knorr Fix ruošinys Arrabiata', 'ingredient-259'],
            ['Knorr FIX ruošinys spagečiams „Bolognese“', 'ingredient-260'],
            ['Knorr FIX ruošinys spagečiams su 4 sūrių ir brokolių padažu', 'ingredient-261'],
            ['Kokosas', 'ingredient-262'],
            ['Kokoso drožlės', 'ingredient-263'],
            ['Kokosų pienas', 'ingredient-264'],
            ['Kola', 'ingredient-265'],
            ['Kola gėrimas', 'ingredient-266'],
            ['Kolamedis', 'ingredient-267'],
            ['Koliurija', 'ingredient-268'],
            ['Kondensuotas pienas', 'ingredient-269'],
            ['Konjakas', 'ingredient-270'],
            ['Konservai', 'ingredient-271'],
            ['Konservuoti kukurūzai', 'ingredient-272'],
            ['Konservuoti žirneliai', 'ingredient-273'],
            ['Kopūstai', 'ingredient-274'],
            ['Krabai', 'ingredient-275'],
            ['Krabų lazdelės', 'ingredient-276'],
            ['Krakmolas', 'ingredient-277'],
            ['Krakmolo sirupas', 'ingredient-278'],
            ['Krapai', 'ingredient-279'],
            ['Kraujažolė', 'ingredient-280'],
            ['Krekeriai', 'ingredient-281'],
            ['Kremas', 'ingredient-282'],
            ['Krevetės', 'ingredient-283'],
            ['Krevetės be kevalo', 'ingredient-284'],
            ['Kriaušės', 'ingredient-285'],
            ['Kriaušiai', 'ingredient-286'],
            ['Krienai', 'ingredient-287'],
            ['Kukurūzai', 'ingredient-288'],
            ['Kukurūzų dribsniai', 'ingredient-289'],
            ['Kukurūzų kruopos', 'ingredient-290'],
            ['Kumpis', 'ingredient-291'],
            ['Kuoja', 'ingredient-292'],
            ['Kurapka', 'ingredient-293'],
            ['Kuskusas', 'ingredient-294'],
            ['Kvapieji pipirai', 'ingredient-295'],
            ['Kviečiai', 'ingredient-296'],
            ['Kvietiniai miltai', 'ingredient-297'],
            ['Laimai', 'ingredient-298'],
            ['Laimas', 'ingredient-299'],
            ['Laimo sultys', 'ingredient-300'],
            ['Laiškiniai česnakai', 'ingredient-301'],
            ['Lakštiniai makaronai', 'ingredient-302'],
            ['Langustas', 'ingredient-303'],
            ['Lašiša', 'ingredient-304'],
            ['Lauro lapai', 'ingredient-305'],
            ['Lavašas', 'ingredient-306'],
            ['Lazanija', 'ingredient-307'],
            ['Lazdyno riešutai', 'ingredient-308'],
            ['Ledai', 'ingredient-309'],
            ['Ledukai', 'ingredient-310'],
            ['Lęšiai', 'ingredient-311'],
            ['Levandos', 'ingredient-312'],
            ['Lydeka', 'ingredient-313'],
            ['Lydytas sūris', 'ingredient-314'],
            ['Liepžiedžiai', 'ingredient-315'],
            ['Likeris', 'ingredient-316'],
            ['Likeris "POÉMA Creme"', 'ingredient-317'],
            ['Limonadas', 'ingredient-318'],
            ['Lynas', 'ingredient-319'],
            ['Linų sėmenys', 'ingredient-320'],
            ['Litis', 'ingredient-321'],
            ['Lūgnė', 'ingredient-322'],
            ['Mairūnas', 'ingredient-323'],
            ['Majonezas', 'ingredient-324'],
            ['Makadamijų riešutai', 'ingredient-325'],
            ['Makaronai', 'ingredient-326'],
            ['Makavykai', 'ingredient-327'],
            ['Mandarinai', 'ingredient-328'],
            ['Mango', 'ingredient-329'],
            ['Mangoldai', 'ingredient-330'],
            ['Manų kruopos', 'ingredient-331'],
            ['Margarinas', 'ingredient-332'],
            ['Marinatas acto', 'ingredient-333'],
            ['Marinuoti agurkai', 'ingredient-334'],
            ['Marmeladas', 'ingredient-335'],
            ['MARTINI BIANCO', 'ingredient-336'],
            ['Martini Bitter', 'ingredient-337'],
            ['MARTINI EXTRA DRY', 'ingredient-338'],
            ['Martini Prosecco', 'ingredient-339'],
            ['MARTINI ROSATO', 'ingredient-340'],
            ['MARTINI ROSSO', 'ingredient-341'],
            ['Mascarpone sūris', 'ingredient-342'],
            ['Medlieva', 'ingredient-343'],
            ['Medus', 'ingredient-344'],
            ['Melasa', 'ingredient-345'],
            ['Mėlynės', 'ingredient-346'],
            ['Melionai', 'ingredient-347'],
            ['Melisa', 'ingredient-348'],
            ['Menkės', 'ingredient-349'],
            ['Mėsa', 'ingredient-350'],
            ['Mėta', 'ingredient-351'],
            ['Midijos', 'ingredient-352'],
            ['Midus', 'ingredient-353'],
            ['Mielės', 'ingredient-354'],
            ['Miežiai', 'ingredient-355'],
            ['Miežinės kruopos', 'ingredient-356'],
            ['Migdolai', 'ingredient-357'],
            ['Miltai', 'ingredient-358'],
            ['Mineralinis vanduo', 'ingredient-359'],
            ['Mirinas', 'ingredient-360'],
            ['Mišinys picai', 'ingredient-361'],
            ['Mocarela sūris', 'ingredient-362'],
            ['Moliūgai', 'ingredient-363'],
            ['Moliūgas', 'ingredient-364'],
            ['Moliūgų sėklos', 'ingredient-365'],
            ['Morkos', 'ingredient-366'],
            ['Morkų sultys', 'ingredient-367'],
            ['Muskatas', 'ingredient-368'],
            ['Nakviša', 'ingredient-369'],
            ['Napaleono lakštai', 'ingredient-370'],
            ['Nendrė', 'ingredient-371'],
            ['Nitrinė druska salietra', 'ingredient-372'],
            ['Notra', 'ingredient-373'],
            ['Nuoviras', 'ingredient-374'],
            ['Obelių aliejus', 'ingredient-375'],
            ['Obuolaia', 'ingredient-376'],
            ['Obuoliai', 'ingredient-377'],
            ['Obuolių actas', 'ingredient-378'],
            ['Obuolių sultys', 'ingredient-379'],
            ['Okra', 'ingredient-380'],
            ['Ožkos pieno sūris', 'ingredient-381'],
            ['Pabarstukai', 'ingredient-382'],
            ['Paberžiai Lepšiai', 'ingredient-383'],
            ['Padažas', 'ingredient-384'],
            ['Panevėžio cukrus plius', 'ingredient-385'],
            ['Pankoliai', 'ingredient-386'],
            ['Pankolis', 'ingredient-387'],
            ['Papaja', 'ingredient-388'],
            ['Papartis', 'ingredient-389'],
            ['Paprika', 'ingredient-390'],
            ['Paprikos milteliai', 'ingredient-391'],
            ['Parmezano sūris', 'ingredient-392'],
            ['Paršelis', 'ingredient-393'],
            ['Pastarnokas', 'ingredient-394'],
            ['Pasukos', 'ingredient-395'],
            ['Paštetas', 'ingredient-396'],
            ['Patisonai', 'ingredient-397'],
            ['Paukštiena', 'ingredient-398'],
            ['Pekano riešutai', 'ingredient-399'],
            ['Pekino kopūstai', 'ingredient-400'],
            ['Pelerūnas kietis', 'ingredient-401'],
            ['Pelėsinis sūris', 'ingredient-402'],
            ['Perlinės kruopos', 'ingredient-403'],
            ['Persikai', 'ingredient-404'],
            ['Persimonas Churma', 'ingredient-405'],
            ['Peru pipiras', 'ingredient-406'],
            ['Petražolės', 'ingredient-407'],
            ['Piena', 'ingredient-408'],
            ['Pienas', 'ingredient-409'],
            ['Pienės', 'ingredient-410'],
            ['Pievagrybiai', 'ingredient-411'],
            ['Pikulė', 'ingredient-412'],
            ['Piliarožė', 'ingredient-413'],
            ['Pipirai', 'ingredient-414'],
            ['Pipirmėtė', 'ingredient-415'],
            ['Pipirnė', 'ingredient-416'],
            ['Pistacijos', 'ingredient-417'],
            ['Pita', 'ingredient-418'],
            ['Plekšnė', 'ingredient-419'],
            ['Plūdena', 'ingredient-420'],
            ['Pomidorai', 'ingredient-421'],
            ['Pomidorų padažas', 'ingredient-422'],
            ['Pomidorų pasta', 'ingredient-423'],
            ['Pomidorų sultys', 'ingredient-424'],
            ['Poras', 'ingredient-425'],
            ['Portulaka', 'ingredient-426'],
            ['Prancūziški rageliai', 'ingredient-427'],
            ['Prieksoniai', 'ingredient-428'],
            ['Prieskoniai', 'ingredient-429'],
            ['Prieskoninės žolelės', 'ingredient-430'],
            ['Provanso žolelės', 'ingredient-431'],
            ['Pudingas', 'ingredient-432'],
            ['Pūgžlys', 'ingredient-433'],
            ['Punšas', 'ingredient-434'],
            ['Pupelės', 'ingredient-435'],
            ['Pupos', 'ingredient-436'],
            ['Pušis', 'ingredient-437'],
            ['Putinas', 'ingredient-438'],
            ['Putojantis vynas', 'ingredient-439'],
            ['Putpelė', 'ingredient-440'],
            ['Putpelės kiaušiniai', 'ingredient-441'],
            ['Rabarbarai', 'ingredient-442'],
            ['Raktažolė', 'ingredient-443'],
            ['Ramunės', 'ingredient-444'],
            ['Rapsų aliejus', 'ingredient-445'],
            ['Raskila', 'ingredient-446'],
            ['Raudonas vynas', 'ingredient-447'],
            ['Raudonėliai Oreganas', 'ingredient-448'],
            ['Raudonieji serbentai', 'ingredient-449'],
            ['Raudonikiai', 'ingredient-450'],
            ['Raudonųjų ir baltųjų serbentų sultys', 'ingredient-451'],
            ['Raugerškis', 'ingredient-452'],
            ['Rauginti agurkai', 'ingredient-453'],
            ['Rauginti kopūstai', 'ingredient-454'],
            ['Razinos', 'ingredient-455'],
            ['Ridikai', 'ingredient-456'],
            ['Ridikėliai', 'ingredient-457'],
            ['Riebalai', 'ingredient-458'],
            ['Riešutai', 'ingredient-459'],
            ['Rislingas', 'ingredient-460'],
            ['Ryžiai', 'ingredient-461'],
            ['Ryžių makaronai', 'ingredient-462'],
            ['Romas', 'ingredient-463'],
            ['Romas "Captain Morgan"', 'ingredient-464'],
            ['Ropės', 'ingredient-465'],
            ['Rozmarinas', 'ingredient-466'],
            ['Rožiniai pipirai', 'ingredient-467'],
            ['Rudmėsės', 'ingredient-468'],
            ['Rugiagėlės', 'ingredient-469'],
            ['Rugiai', 'ingredient-470'],
            ['Ruginiai miltai', 'ingredient-471'],
            ['Rūgpienis', 'ingredient-472'],
            ['Rūgštynės', 'ingredient-473'],
            ['Runkeliai', 'ingredient-474'],
            ['Rūtos', 'ingredient-475'],
            ['Saida', 'ingredient-476'],
            ['Sakė', 'ingredient-477'],
            ['Saldainiai', 'ingredient-478'],
            ['Saldymedis', 'ingredient-479'],
            ['Saliamis', 'ingredient-480'],
            ['Salierai', 'ingredient-481'],
            ['Salieras', 'ingredient-482'],
            ['Salyklas', 'ingredient-483'],
            ['Salotos', 'ingredient-484'],
            ['SANTA MARIA juodieji pipirai', 'ingredient-485'],
            ['SANTA MARIA juodųjų pipirų', 'ingredient-486'],
            ['SANTA MARIA aitriosios paprikos', 'ingredient-487'],
            ['SANTA MARIA aitriųjų paprikų', 'ingredient-488'],
            ['SANTA MARIA akmens druska', 'ingredient-489'],
            ['SANTA MARIA akmens druskos', 'ingredient-490'],
            ['SANTA MARIA akmens druskos malūnėlyje', 'ingredient-491'],
            ['SANTA MARIA ANCHO ST YLE aitriosios paprikos', 'ingredient-492'],
            ['SANTA MARIA cinamonas', 'ingredient-493'],
            ['SANTA MARIA cinamono lazdelės', 'ingredient-494'],
            ['SANTA MARIA CHIPOTLE aitriosios paprikos', 'ingredient-495'],
            ['SANTA MARIA CHIPOTLE aitriųjų paprikų', 'ingredient-496'],
            ['SANTA MARIA druska', 'ingredient-497'],
            ['SANTA MARIA gvazdikėliai', 'ingredient-498'],
            ['SANTA MARIA JALAPENO aitriosios paprikos', 'ingredient-499'],
            ['SANTA MARIA kmynų', 'ingredient-500'],
            ['SANTA MARIA lauro lapai', 'ingredient-501'],
            ['SANTA MARIA malto cinamono', 'ingredient-502'],
            ['SANTA MARIA maltų paprikų', 'ingredient-503'],
            ['SANTA MARIA NACHO kukurūzų traškučių', 'ingredient-504'],
            ['Santa Maria prieskoniai "Kakava ir aitrioji paprika"', 'ingredient-505'],
            ['SANTA MARIA raudonėliai', 'ingredient-506'],
            ['SANTA MARIA RED HOT aitriosios paprikos', 'ingredient-507'],
            ['SANTA MARIA RED HOT aitriosios paprikos dribsniai', 'ingredient-508'],
            ['SANTA MARIA RED HOT aitriųjų paprikų dribsnių', 'ingredient-509'],
            ['SANTA MARIA saulėje džiovintų pomidorų', 'ingredient-510'],
            ['SANTA MARIA TACO padažo', 'ingredient-511'],
            ['SANTA MARIA TELLICHERRY pipirų', 'ingredient-512'],
            ['SANTA MARIA TEX MEX tortilijos', 'ingredient-513'],
            ['SANTA MARIA TEX MEX tortilijų', 'ingredient-514'],
            ['SANTA MARIA vanilinis cukrus', 'ingredient-515'],
            ['Sardinės', 'ingredient-516'],
            ['Saulėgrąžos', 'ingredient-517'],
            ['Saulėgrąžų aliejus', 'ingredient-518'],
            ['Sausainiai', 'ingredient-519'],
            ['Sausmedis', 'ingredient-520'],
            ['Sedula', 'ingredient-521'],
            ['Sėklų mišinys', 'ingredient-522'],
            ['Sėlenos', 'ingredient-523'],
            ['Seliava', 'ingredient-524'],
            ['Seza', 'ingredient-525'],
            ['Sezamas', 'ingredient-526'],
            ['Sezamų aliejus', 'ingredient-527'],
            ['Sičuano pipiras', 'ingredient-528'],
            ['Sidabražolė', 'ingredient-529'],
            ['Sidras', 'ingredient-530'],
            ['Silkė', 'ingredient-531'],
            ['Sirupas', 'ingredient-532'],
            ['SKANULIO kiaulienos sprandinės armėniškas šašlykas', 'ingredient-533'],
            ['Skumbrė', 'ingredient-534'],
            ['Slyvos', 'ingredient-535'],
            ['Smidras', 'ingredient-536'],
            ['Soda', 'ingredient-537'],
            ['Soja', 'ingredient-538'],
            ['Sojos', 'ingredient-539'],
            ['Sojos padažas', 'ingredient-540'],
            ['Sorų kruopos', 'ingredient-541'],
            ['Spageti', 'ingredient-542'],
            ['Spanguolės', 'ingredient-543'],
            ['Spiritas', 'ingredient-544'],
            ['Sprite', 'ingredient-545'],
            ['Sraigės vynuoginės', 'ingredient-546'],
            ['Starkis', 'ingredient-547'],
            ['Stinta', 'ingredient-548'],
            ['Stirniena', 'ingredient-549'],
            ['Sula', 'ingredient-550'],
            ['Sultinys', 'ingredient-551'],
            ['Sultys', 'ingredient-552'],
            ['Sūrelis', 'ingredient-553'],
            ['Sūris', 'ingredient-554'],
            ['Sutirštintas pienas', 'ingredient-555'],
            ['Sutys', 'ingredient-556'],
            ['Svarainiai', 'ingredient-557'],
            ['Sviestas', 'ingredient-558'],
            ['Sviesto skonio „Rama Maestro“', 'ingredient-559'],
            ['Svietsas', 'ingredient-560'],
            ['Svogūnai', 'ingredient-561'],
            ['Svogūnų laiškai', 'ingredient-562'],
            ['Šafranas', 'ingredient-563'],
            ['Šalavijas', 'ingredient-564'],
            ['Šalpusnis', 'ingredient-565'],
            ['Šaltalankis', 'ingredient-566'],
            ['Šaltekšnis', 'ingredient-567'],
            ['Šamas', 'ingredient-568'],
            ['Šermukšnis', 'ingredient-569'],
            ['Šerniena', 'ingredient-570'],
            ['Šiitake grybai', 'ingredient-571'],
            ['Šilauogės', 'ingredient-572'],
            ['Šokoladas', 'ingredient-573'],
            ['Juodasis šokoladas', 'ingredient-574'],
            ['Pieniškas šokoladas', 'ingredient-575'],
            ['Šparagai', 'ingredient-576'],
            ['Šparaginės pupelės', 'ingredient-577'],
            ['Špinatai', 'ingredient-578'],
            ['Šprotai', 'ingredient-579'],
            ['Švendras', 'ingredient-580'],
            ['Tabasko padažas', 'ingredient-581'],
            ['Taukai kiaulių', 'ingredient-582'],
            ['Tekila', 'ingredient-583'],
            ['Tekšė', 'ingredient-584'],
            ['Tešla', 'ingredient-585'],
            ['Tetervinas', 'ingredient-586'],
            ['Tilapija', 'ingredient-587'],
            ['Tyrė', 'ingredient-588'],
            ['Tofu - sojų varškė', 'ingredient-589'],
            ['Tonikas', 'ingredient-590'],
            ['Topinambai', 'ingredient-591'],
            ['Tortilija', 'ingredient-592'],
            ['Trauktinė', 'ingredient-593'],
            ['Trešnės', 'ingredient-594'],
            ['Triušiena', 'ingredient-595'],
            ['Tunas', 'ingredient-596'],
            ['Ūmedės', 'ingredient-597'],
            ['Ungurys', 'ingredient-598'],
            ['Uogienė', 'ingredient-599'],
            ['Uogos', 'ingredient-600'],
            ['Upėtakis', 'ingredient-601'],
            ['Vafliai', 'ingredient-602'],
            ['Vaisiai', 'ingredient-603'],
            ['Vaistinė ožragė', 'ingredient-604'],
            ['Valgomieji dažai', 'ingredient-605'],
            ['Vanduo', 'ingredient-606'],
            ['Vanilė', 'ingredient-607'],
            ['Vanilės lazdelės', 'ingredient-608'],
            ['Vanilinas', 'ingredient-609'],
            ['Vanilinė', 'ingredient-610'],
            ['Vanilinis cukrus', 'ingredient-611'],
            ['Varlių šlaunelės', 'ingredient-612'],
            ['Varnalėša', 'ingredient-613'],
            ['Varškė', 'ingredient-614'],
            ['Varškės sūris', 'ingredient-615'],
            ['Vasabi', 'ingredient-616'],
            ['Vėgėlė', 'ingredient-617'],
            ['Vermutas', 'ingredient-618'],
            ['Veršiena', 'ingredient-619'],
            ['Veršienos faršas', 'ingredient-620'],
            ['Vėžiai', 'ingredient-621'],
            ['Vijūnai', 'ingredient-622'],
            ['Vynas', 'ingredient-623'],
            ['Vyno actas', 'ingredient-624'],
            ['Vynuogės', 'ingredient-625'],
            ['Vynuogių sultys', 'ingredient-626'],
            ['Virtos MAŽYLIŲ dešrelės', 'ingredient-627'],
            ['Virtos MAŽYLIŲ dešrelės Šeimos pakuotė', 'ingredient-628'],
            ['Virtos MAŽYLIŲ dešrelės su kalakutiena', 'ingredient-629'],
            ['Virtos MAŽYLIŲ dešrelės su sūriu', 'ingredient-630'],
            ['Viskis', 'ingredient-631'],
            ['Vyšnios', 'ingredient-632'],
            ['Vištiena', 'ingredient-633'],
            ['Vištienos faršas', 'ingredient-634'],
            ['Vištienos filė', 'ingredient-635'],
            ['Vištų blauzdelės', 'ingredient-636'],
            ['Vištų kakleliai', 'ingredient-637'],
            ['Vištų kepenėlės', 'ingredient-638'],
            ['Vištų skrandukai', 'ingredient-639'],
            ['Vištų sparneliai', 'ingredient-640'],
            ['Vištų širdelės', 'ingredient-641'],
            ['Vorčesterio padažas', 'ingredient-642'],
            ['Voveraitės', 'ingredient-643'],
            ['Zefyrai', 'ingredient-644'],
            ['Žalioji citrina', 'ingredient-645'],
            ['Žaliosios citrinos sultys', 'ingredient-646'],
            ['Žaliuokės', 'ingredient-647'],
            ['Žalumynai', 'ingredient-648'],
            ['Žalumynai įvairūs', 'ingredient-649'],
            ['Žąsis', 'ingredient-650'],
            ['Želatina', 'ingredient-651'],
            ['Želė', 'ingredient-652'],
            ['Želės cukrus „Multi“', 'ingredient-653'],
            ['Žemės riešutai', 'ingredient-654'],
            ['Žemės riešutų aliejus', 'ingredient-655'],
            ['Žemuogės', 'ingredient-656'],
            ['Ženšenis', 'ingredient-657'],
            ['Ženuogės', 'ingredient-658'],
            ['Žiediniai kopūstai', 'ingredient-659'],
            ['Žirneliai', 'ingredient-660'],
            ['Žirniai', 'ingredient-661'],
            ['Žuvies piršteliai', 'ingredient-662'],
            ['Žuvis', 'ingredient-663'],
            ['Česnakai', 'ingredient-664'],
            ['Mėsos sultinys', 'ingredient-665'],
            ['Džiūvėsiai', 'ingredient-666'],

        ];

        foreach($ingredients as $ingredient){
            $data = new Ingredient();
            $data->setName($ingredient[0]);
            $manager->persist($data);

            $this->addReference($ingredient[1], $data);
        }
        $manager->flush();

    }

    /**
     * {@inheritDoc}
     */
    function getOrder()
    {
        return 1;
    }
}

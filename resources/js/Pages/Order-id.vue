<template>
  <Header/>
  <div class="container-fluid content-order">
    <div class="nav-order">
      <p class="nav-order-text">Недвижимость в Москве</p>
      <img src='/image/right.png' class="nav-order-arrow" alt="">
      <p class="nav-order-text">Продажа</p>
      <img src='/image/right.png' class="nav-order-arrow" alt="">
      <p class="nav-order-text">Продажа 3-комнатных квартир в Москве</p>
      <img src='/image/right.png' class="nav-order-arrow" alt="">
      <p class="nav-order-text">ЖК "LUCE"</p>
    </div>
    <div class="textName-order">
      <p>Продается 3-комн. квартира, 91 м² в ЖК "LUCE"</p>
    </div>
    <div class="room-location-address">
      <div class="room-location-address-text">Москва, Крестовоздвиженский переулок, 4</div>
      <p class="room-location-address-text-map">На карте</p>
    </div>
    <div class="room-location-metro">
      <div class="room-location-metro-group">
        <img src='/image/metro-logo.png' style="filter: hue-rotate(190deg) saturate(300%)" class="room-location-metro-img" alt="">
        <p class="room-location-metro-text">Арбатская </p>
        <p class="room-location-metro-text-time">7 мин.</p>
      </div>
      <div class="room-location-metro-group">
        <img src='/image/metro-logo.png' style="filter: hue-rotate(190deg) saturate(300%)" class="room-location-metro-img" alt="">
        <p class="room-location-metro-text">Смоленская </p>
        <p class="room-location-metro-text-time">5 мин.</p>
      </div>
      <div class="room-location-metro-group">
        <img src='/image/metro-logo.png' style="filter: hue-rotate(190deg) saturate(300%)" class="room-location-metro-img" alt="">
        <p class="room-location-metro-text">Алекс.сад </p>
        <p class="room-location-metro-text-time">10 мин.</p>
      </div>
    </div>
    <div class="room-photo">
      <img src='/image/room-photo-main.jpg' alt="" class="room-photo-img">
    </div>
    <div class="room-price-menu">
      <p class="room-price-menu-text">142 500 000 ₽</p>
      <p class="room-price-menu-text-m2"> 1 560 000 ₽ м²</p>
      <div class="room-price-menu-contact-center">
        <div class="room-price-menu-contact">
          <p class="room-price-menu-contact-text">Контакты застройщика</p>
        </div>
      </div>
    </div>
    <div class="room-developer">
      <div class="group-room-dev-1">
        <p class="room-developer-text_dev">Застройщик</p>
        <img src='/image/logo-MRgroup.png' alt="" class="room-developer-img_dev">
        <p class="room-developer-text-name_dev">MR Group</p>
      </div>
      <div class="group-room-dev-2">
        <p class="group-room-develope-2 group-room-develope-text-1">Год <br> основания <br> 2003</p>
        <p class="group-room-develope-2 group-room-develope-text-2">Сдано <br> 128 домов в <br> 29 ЖК</p>
        <p class="group-room-develope-2 group-room-develope-text-3">Строится <br> 78 домов в <br> 21 ЖК</p>
      </div>
    </div>
    <div class="room-credit_ipoteka">
      <img src='/image/logo-credit.png' alt="" class="room-credit-logo_ipoteka">
    </div>
    <div class="room-img-group">
      <img src='/image/room-photo-main.jpg' alt="" class="room-img-1 room-img">
      <img src='/image/room-photo-2.jpg' alt="" class="room-img-2 room-img">
      <img src='/image/room-photo-3.jpg' alt="" class="room-img-3 room-img">
    </div>
    <div class="room-characters">
      <div class="room-characters-group">
        <div class="row">
          <!--class_m это col-sm-4-->
          <!--class_f это col-sm-3 room-characters-group-center-1-->
          <!--class_s это col-sm-3 room-characters-group-center-2-->
          <CharHouseT1 :img="'/image/areaAll.png'" :class_m="true" :title="'Общая площадь: '" :description="'91'" :metre="'м²'" />
          <CharHouseT1 :img="'/image/areaKitchen.png'" :class_m="true" :title="'Площадь кухни: '" :description="'91'" :metre="'м²'" />
          <CharHouseT1 :img="'/image/areaLife.png'" :class_m="true" :title="'Жилая площадь: '" :description="'91'" :metre="'м²'" />
          <CharHouseT1 :img="'/image/areaLife.png'" :class_m="true" :title="'Комната: '" :description="'91'" />
          <CharHouseT1 :img="'/image/finishing.png'" :class_m="true" :title="'Отделка: '" :description="'91'" />
          <CharHouseT1 :img="'/image/floorCount.png'" :class_m="true" :title="'Этаж: '" :description="'91'" />
          <div class="col-sm-2"></div>
          <CharHouseT1 :img="'/image/houseKey.png'" :class_f="true" :title="'Год сдачи: '" :description="'91'" />
          <div class="col-sm-1"></div>
          <CharHouseT1 :img="'/image/houseKey.png'" :class_s="true" :title="'Дом: '" :description="'91'" />
        </div>
      </div>
    </div>
    <div class="room-zhk-description">
      <p class="room-zhk-description-text"></p>
    </div>
    <div class="room-about-apartment">
      <p class="room-about-apartment-main-text">О квартире</p>
        <CharactersRoom :title="'Тип дома'" :description="this.data.type_room" />
        <CharactersRoom :title="'общая площадь'" :metre="' м²'" :description="this.data.area_room" />
        <CharactersRoom :title="'Жилая площадь'" :metre="' м²'" :description="this.data.area_life_room" />
        <CharactersRoom :title="'Площадь кухни'" :metre="' м²'" :description="this.data.area_kitchen_room" />
        <CharactersRoom :title="'Высота потолков'" :metre="' м'" :description="this.data.wall_height_room" />
        <CharactersRoomT2 :title="'Санузел'" :description-t1="'Совмещенных'" :description-t2="'Раздельный'" :char-t1="this.data.bathroom_combined_room" :char-t2="this.data.bathroom_separate_room" />
        <CharactersRoomT2 :title="'Балкон/лоджия'" :description-t1="'балкон'" :description-t2="'лоджия'" :char-t1="this.data.balcony_room" :char-t2="this.data.loggia_room" />
        <CharactersRoom :title="'вид из окна'" :description="this.data.view_window" />
        <CharactersRoom :title="'Отделка'" :description="this.data.finishing" />
    </div>
    <div class="room-about-apartment">
      <p class="room-about-apartment-main-text">О доме</p>
      <characters-home-t2 :title="'Количество лифтов'" :description-t1="'Пассажирских'" :description-t2="'Грузовых'" :char-t1="this.data.elevator_count_passenger" :char-t2="this.data.elevator_count_freight" />
      <CharactersRoom :title="'Тип дома'" :description="this.data.type_house" />
      <CharactersRoom :title="'Парковка'" :description="this.data.type_parking" />
    </div>
    <div class="room-apartament-finishing">
      <p class="room-apartament-finishing-text-mn">Отделка квартиры</p>
      <p class="room-apartament-finishing-text">Квартира продается в {{finishing}} отделке</p>
      <img src='/image/room-apartament-finishing-img.png' alt="" class="room-apartament-finishing-img">
    </div>
    <div class="room-location-map">
      <p class="room-location-map-text-mn">Расположение</p>
      <img src='/image/room-location-map.png' alt="" class="room-location-map-img">
    </div>
    <div class="room-developer-description" v-if="developAuthor">
      <p class="room-developer-description-text_avtor">Автор объявления</p>
      <p class="room-developer-description-text_mn">Застройщик «{{developAuthor}}»</p>
      <img src='/image/room-verify-good.png' alt="" class="room-developer-description-verify-good_img">
      <p class="room-developer-description-text_verify-good">Надежный застройщик</p>
      <div class="row">
        <div class="room-developer-description-character col-sm-3">
          <div class="room-developer-description-character-text">
            <p class="room-developer-description-characters-text_mn">{{yearCreate}}</p>
            <p class="room-developer-description-characters-text_sp">Год <br> основания</p>
          </div>
        </div>
        <div class="room-developer-description-character col-sm-3">
          <div class="room-developer-description-character-text">
            <p class="room-developer-description-characters-text_mn">{{ houseFinishingCount }}</p>
            <p class="room-developer-description-characters-text_sp">Домов сдано <br> в {{ houseFinishingCountLCD }} ЖК</p>
          </div>
        </div>
        <div class="room-developer-description-character col-sm-3">
          <div class="room-developer-description-character-text">
            <p class="room-developer-description-characters-text_mn">{{ houseBuildingCount }}</p>
            <p class="room-developer-description-characters-text_sp">Домов строится <br> в {{ houseBuildingCountLCD }} ЖК</p>
          </div>
        </div>
      </div>
      <div class="room-developer-description-character-type-2">
        <div class="room-developer-description-character-text">
          <p class="room-developer-description-characters-text_mn">{{procentHouseBuilding}}<span class="room-developer-description-characters-text_mn-percent">% </span></p>
          <p class="room-developer-description-characters-text_sp">Домов сдано <br> вовремя</p>
        </div>
      </div>
      <div class="room-developer-characters-description">
        <p class="room-developer-characters-description-text">{{descriptionDeveloperLCD}}</p>
      </div>
      <div class="room-developer-about">
        <p class="room-developer-about-text">Подробнее о застройщике</p>
      </div>
    </div>
  </div>
  <Footer/>
</template>

<script>
import Header from "../Components/Header.vue";
import Footer from "../Components/Footer.vue";
import CharactersRoom from "../Components/CharactersRoom.vue";
import CharactersRoomT2 from "../Components/CharactersRoomT2.vue";
import CharactersHomeT2 from "../Components/CharactersHome2.vue";
import CharHouseT1 from "../Components/CharHouseT1.vue";
import {formToJSON} from "axios";
import {data} from "autoprefixer";
export default {
  name: 'MyComponent',
  components: {CharHouseT1, CharactersHomeT2, CharactersRoomT2, CharactersRoom, Footer, Header},
  data() {
    return{
      data: data,
      type_room: 'Новостройка',
      area_room: '2',
      area_life_room: '2',
      area_kitchen_room: '32',
      wall_height_room: '1',
      bathroom_combined_room: '3',
      bathroom_separate_room: '2',
      balcony_room: '1',
      loggia_room: '2',
      view_window: '1',
      finishing: '2',
      elevator_count_passenger: '2',
      elevator_count_freight: '1',
      type_house: '3',
      type_parking: '1',
      developAuthor: 'Пресня сити',
      yearCreate: '2019',
      houseFinishingCount: '156',
      houseFinishingCountLCD: '172',
      houseBuildingCount: '190',
      houseBuildingCountLCD: '80',
      procentHouseBuilding: '97',
      descriptionDeveloperLCD: 'Жилой комплекс бизнес-класса «Пресня Сити» компаний MR Group, Coalco, при финансовой поддержке Банка ВТБ возведен на участке 15 га в историческом месте Москвы (м. «Улица 1905 года», Ходынская ул., 2). В составе комплекса три 44-этажных башни, а также реконструируемое историческое здание начала 30-х годов — хлебозавод имени В. П. Зотова.',
    };
  },
  mounted() {
    this.fetchData();
  },
  methods: {
    fetchData() {
      axios.get('http://localhost:8000/post') // Убедитесь, что путь корректный
        .then(response => {
          this.data = response.data;
        })
        .catch(error => {
          console.error('Ошибка при получении данных:', error);
        });
    }
  }
};


</script>

<style>
.room-characters{
  width: 890px;
}
</style>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Pihar Garden - An Aromatic Experience</title>
    @include('frontend/layouts/css')
  </head>
  <body>
    <main>
      <div class="logo-img">
        <a href="index.html">
          <img src="{{'../frontend/assets/pics/pg-logo.png'}}" alt="logo" class="logo" />
        </a>
      </div>

      <h4 class="primary-color">Pihar Garden</h4>
      <p>
      <h5 class="secondary-color">At- Asna More, Asna, Ps- Palojori</h5>
      <h5 class="secondary-color">Deoghar 814146</h5>
      </p>
    </main>
    <section class="showcase">
        <div class="specials">
            <h3 class="specials-heading primary-color">OUR SPECIALS</h3>
            <div class="specials-body">
                <div class="item">
                    <div class="item-img"><img src="{{'../frontend/assets/pics/tiffin.jpg'}}" alt="tiffin"></div>
                    <h4>Tiffin</h4>
                </div>
                <div class="item">
                    <div class="item-img"><img src="{{'../frontend/assets/pics/indian.jpg'}}" alt="indian"></div>
                    <h4>Indian</h4>
                </div>
                <div class="item">
                    <div class="item-img"><img src="{{'../frontend/assets/pics/chinese.jpg'}}" alt="chinese"></div>
                    <h4>Chinese</h4>
                </div>
            </div>
            <h3 class="specials-heading primary-color">ABOUT US</h3>
            <p class="secondary-color">Our menu spotlights a delicious food collection of Chinese and regional Indian cuisine. Vegetarian Chinese, non-vegetarian Chinese, vegetarian Punjabi, Non-vegetarian Punjabi, and a wide range of mouth-watering items grace our menu all the time.</p>
        </div>
        <div class="order-form">
            <h3 class="secondary-color">Order Form</h3>
            <div class="form">
                <form action="">
                    <div class="row">
                        <div class="label col-12">
                            <label for="select-items "><span>*</span>Select Items from Menu Below:</label>
                        </div>
                        <div class="input col-12">
                            <input type="text" name="select-items" id="select-items" placeholder="Enter item name to search">
                        </div>
                       
                    </div>

                    <div class="container" id="accordion-container">
                      <div class="accordion" id="Accordion">
                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingOne">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="false" aria-controls="collapseOne">
                              <span>
                                Any Time You Can Eat
                              </span>
                            </button>
                          </h2>
                          <div id="collapseOne" class="accordion-collapse collapse" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">AALOO PARATHA - MASALA CURD</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 20</p>
                                    <p class="dhhdhd card-button" style="cursor:pointer;width:70px" data-id="1" data-name="AALOO PARATHA - MASALA CURD" data-price="20">Add</p> 
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">CHEESE DHOSA</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 100</p>
                                    <p class="dhhdhd card-button" style="cursor:pointer;width:70px" data-id="2" data-name="CHEESE DHOSA" data-price="100">Add</p> 
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">CHICKEN PARATHA - MASALA CURD</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 40</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">COFFEE</p>
                                   <p class="card-sub-heading">PER PCS</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 20 <span class="normal-price">???20</span><span class="discount">(0%)</span></p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">COLD50</p>
                                   <p class="card-sub-heading">PER PCS</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 50 <span class="normal-price">???50</span><span class="discount">(0%)</span></p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">DELIVERY 3-10 KM</p>
                                   <p class="card-sub-heading">PER PCS</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 60 <span class="normal-price">???60</span><span class="discount">(0%)</span></p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">FISH FRY</p>
                                   <p class="card-sub-heading">PER PCS</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 20 <span class="normal-price">???20</span><span class="discount">(0%)</span></p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">HAKKA NOODLES FULL</p>
                                   <p class="card-sub-heading">PER PCS</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 60 <span class="normal-price">???60</span><span class="discount">(0%)</span></p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">IDLI</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 30</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">KADHAI CHICKEN 500G</p>
                                   <p class="card-sub-heading">PER PCS</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 320 <span class="normal-price">???320</span><span class="discount">(0%)</span></p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">MASALA DHOSA - SAMBHAR - CHATNI</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 60</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">MUTTON MAKING CHARGE</p>
                                   <p class="card-sub-heading">1KG</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 220 <span class="normal-price">???220</span><span class="discount">(0%)</span></p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">ONION PARATHA</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 20</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">PANEER DHOSA - SAMBHAR - CHATNI</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 100</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">PANEER PARATHA - MASALA CURD</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 50</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">PANEER UTTAPAM</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 100</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">PAPER DHOSA - SAMBHAR</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 40</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">RED BULL</p>
                                   <p class="card-sub-heading">PER PCS</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 130 <span class="normal-price">???130</span><span class="discount">(0%)</span></p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">TEA</p>
                                   <p class="card-sub-heading">PER PCS</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 10 <span class="normal-price">???10</span><span class="discount">(0%)</span></p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">VEG UTTAPAM</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 50</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">WATER 15</p>
                                   <p class="card-sub-heading">PER PCS</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 15 <span class="normal-price">???15</span><span class="discount">(0%)</span></p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">STRING 25</p>
                                   <p class="card-sub-heading">PER PCS</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 25 <span class="normal-price">???25</span><span class="discount">(0%)</span></p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>

                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingTwo">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                              <span>
                                Lunch Veg Thali
                              </span>
                            </button>
                          </h2>
                          <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">LUNCH VEG THALI</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 40</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">RICE</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 20</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">SALAD</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 20</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                            </div>
                          </div>
                        </div>

                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingThree">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree">
                              <span>Non Veg</span>
                            </button>
                          </h2>
                          <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">BUTTER CHICKEN 1KG</p>
                                   <p class="card-sub-heading">1KG</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 600 <span class="normal-price">???600</span><span class="discount">(0%)</span></p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              
                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">BUTTER CHICKEN MASALA FULL (4 PCS)</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 180</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">BUTTER CHICKEN MASALA HALF (2PCS)</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 90</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">CHICKEN CURRY FULL (4 PCS)</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 160</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">CHICKEN CURRY HALF (2 PCS)</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 80</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">CHICKEN KASSA FULL (4 PCS)</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 180</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">CHICKEN KASSA HALF (2 PCS)</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 90</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">EGG CURRY FULL (4 PCS)</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 100</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">EGG CURRY HALF (2 PCS)</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 50</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>

                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingFour">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour">
                              <span>
                                Handi Champaran Chicken
                              </span>
                            </button>
                          </h2>
                          <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              
                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">HANDI CHICKEN 1PC</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 40</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">HANDI CHICKEN 1kg</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 540 <span class="normal-price">???540</span><span class="discount">(0%)</span></p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">HANDI CHICKEN 500g</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 300</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              
                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">CHICKEN CURRY HALF (2 PCS)</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 80</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>

                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingFive">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive">
                              <span>
                                Biryani
                              </span>
                            </button>
                          </h2>
                          <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                             
                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">CHICKEN BIRYANI FULL</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 140</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">CHICKEN BIRYANI HALF</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 80</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">EGG BIRYANI FULL</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 100</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">EGG BIRYANI HALF</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 60</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">HANDI CHICKEN BIRYANI FULL</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 160</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">HANDI CHICKEN BIRYANI HALF</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 90</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">VEG BIRYANI FULL</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 160</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">VEG BIRYANI HALF</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 90</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>

                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingSix">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSix" aria-expanded="false" aria-controls="collapseSix">
                              <span>
                                Veg
                              </span>
                            </button>
                          </h2>
                          <div id="collapseSix" class="accordion-collapse collapse" aria-labelledby="headingSix" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">BUTTER PANEER MASALA FULL</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 160</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">BUTTER PANEER MASALA HALF</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 80</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">DAL FRY FULL</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 80</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">DAL FRY HALF</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 40</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">DAL MAKHANI FULL</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 80</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">DAL MAKHANI HALF</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 40</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">KADHAI PANEER MASALA FULL</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 160</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">KADHAI PANEER MASALA HALF</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 80</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">MASHROOM MASALA FULL</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 200</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">MASHROOM MASALA HALF</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 100</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">MATAR PANEER MASALA FULL</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 180</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">MATAR PANEER MASALA HALF</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 90</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">MIX VEG</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 40</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">MIX VEG</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 60</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>
                              
                            </div>
                          </div>
                        </div>

                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingSeven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseSeven" aria-expanded="false" aria-controls="collapseSeven">
                              <span>
                                Bread
                              </span>
                            </button>
                          </h2>
                          <div id="collapseSeven" class="accordion-collapse collapse" aria-labelledby="headingSeven" data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">BUTTER PARATHA</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 20</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">CHAPATI</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 20</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">FULKA TAWA ROTI</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 5</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">LACHCHHA PARATHA</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 15</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">TRIANGLE PARATHA</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 15</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>

                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingEight">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEight" aria-expanded="false" aria-controls="collapseEight">
                              <span>
                                Rice
                              </span>
                            </button>
                          </h2>
                          <div id="collapseEight" class="accordion-collapse collapse" aria-labelledby="headingEight" data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">NAMKEEN PULAO</p>
                                   <p class="card-sub-heading">FULL</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 80 <span class="normal-price">???80</span><span class="discount">(0%)</span></p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">VEG FRIED RICE</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 100</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">VEG PULAO</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 120</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">JEERA RICE</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 60</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                            </div>
                          </div>
                        </div>

                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingNine">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseNine" aria-expanded="false" aria-controls="collapseNine">
                              <span>
                                Snacks Non Veg
                              </span>
                            </button>
                          </h2>
                          <div id="collapseNine" class="accordion-collapse collapse" aria-labelledby="headingNine" data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                              
                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">CHICKEN LOLIPOP FULL</p>
                                   <p class="card-sub-heading">FULL</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 200 <span class="normal-price">???200</span><span class="discount">(0%)</span></p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">CHICKEN 65 FULL</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 160</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">CHICKEN 65 HALF</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 80</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">CHICKEN CHILLI (Boneless) FULL</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 150</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">CHICKEN CHILLI ( Boneless) HALF</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 80</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">CHICKEN CHILLI (With Bone) FULL</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 120</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">CHICKEN CHILLI (With Bone) HALF</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 60</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">CHICKEN KABAB</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 80</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">CHICKEN KABAB/Pcs</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 40</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">CHICKEN PAKODA FULL</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 160</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">CHICKEN PAKODA HALF</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 80</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">CHICKEN SEEKH KABAB</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 180</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">CHICKEN SHAMI KABAB</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 80</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>


                            </div>
                          </div>
                        </div>

                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingTen">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTen" aria-expanded="false" aria-controls="collapseTen">
                              <span>
                                Snacks Veg
                              </span>
                            </button>
                          </h2>
                          <div id="collapseTen" class="accordion-collapse collapse" aria-labelledby="headingTen" data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">MASHROOM CHILLI FULL</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 160</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">MASHROOM CHILLI HALF</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 80</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">PANEER CHILLI FULL</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 160</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">PANEER CHILLI HALF</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 80</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">PANEER PAKODA FULL</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 140</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">PANEER PAKODA HALF</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 80</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>  


                            </div>
                          </div>
                        </div>

                        <div class="accordion-item">
                          <h2 class="accordion-header" id="headingEleven">
                            <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseEleven" aria-expanded="false" aria-controls="collapseEleven">
                              <span>
                                Noodles & Roll
                              </span>
                            </button>
                          </h2>
                          <div id="collapseEleven" class="accordion-collapse collapse" aria-labelledby="headingEleven" data-bs-parent="#accordionExample">
                            <div class="accordion-body">

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">CHEESE ROLL</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 100</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">CHICKEN NOODLES FULL</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 120</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">CHICKEN NOODLES HALF</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 60</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">CHICKEN ROLL</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 80</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">EGG NOODLES FULL</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 80</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">EGG NOODLES HALF</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 40</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">EGG ROLL</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 40</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">PANEER NOODLES FULL</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 120</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">PANEER NOODLES HALF</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 60</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">PANEER ROLL</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 80</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">VEG NOODLES FULL</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 60</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">VEG NOODLES HALF</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 30</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>

                              <div class="card">
                                <div class="row">
                                  <div class="col-12">
                                   <p class="card-heading">VEG ROLL</p>
                                  </div>
                                  <div class="col">
                                    <div class="row">
                                    <p class="col-6 card-price">??? 30</p>
                                    <button class="col-2 card-button">Add</button>
                                    </div>
                                  </div>
                                </div>
                              </div>



                            </div>
                          </div>
                        </div>

                      </div>
                    </div>
<div id="cartdata"></div>
                    <div class="row">
                      <div class="label col-12">
                          <label for="select-items "><span>*</span>Full Name:</label>
                      </div>
                      <div class="input col-12">
                          <input type="text" name="select-items" id="select-items" placeholder="Name">
                      </div>
                     
                  </div>

                  <div class="row">
                    <div class="label col-12">
                        <label for="select-items "><span>*</span>Select Items from Menu Below:</label>
                    </div>
                    <div class="input col-12">
                        <input type="text" name="select-items" id="select-items" placeholder="Enter item name to search">
                    </div>
                   
                </div>
                </form>
            </div>
        </div>
    </section>
    @include('frontend/layouts/js')
  </body>
</html>


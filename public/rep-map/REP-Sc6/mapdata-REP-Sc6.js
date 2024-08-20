var simplemaps_usmap_mapdata={
  main_settings: {
//General settings
    width: "responsive", //'700' or 'responsive'
    background_color: "#FFFFFF",
    background_transparent: "yes",
    border_color: "#ffffff",
    popups: "detect",
    
    //State defaults
    state_description: "State Description",
    state_color: "#88A4BC",
    state_hover_color: "#3B729F",
    state_url: "",
    border_size: 1.5,
    all_states_inactive: "no",
    all_states_zoomable: "no",
    
    //Location defaults
	
    location_description: "", //content removed but not fully inactive
    location_color: "#2041D4",
    location_opacity: 0.8,
    location_hover_opacity: 1,
    location_url: "",
    location_size: 26,	
    location_type: "circle", //in order to have circle box for location
    location_image_source: "frog.png",
    location_border_color: "#FFFFFF",
    location_border: 2,
    location_hover_border: 2.5,
    all_locations_inactive: "no",
    all_locations_hidden: "no",
    
    //Label defaults
    label_color: "#d5ddec",
    label_hover_color: "#d5ddec",
    label_size: 20,
    label_font: "calibri",
    hide_labels: "no",
    hide_eastern_labels: "no",
    manual_zoom: "no",
    back_image: "no",
    initial_back: "no",
    initial_zoom: -1,
    initial_zoom_solo: "no",
    region_opacity: 1,
    region_hover_opacity: 0.6,
    zoom_out_incrementally: "yes",
    zoom_percentage: 0.99,
    zoom_time: 0.5,
    
    //Popup settings
    popup_color: "white",
    popup_opacity: 0.9,
    popup_shadow: 1,
    popup_corners: 5,
    popup_font: "12px/1.5 Verdana, Arial, Helvetica, sans-serif",
    popup_nocss: "no",
    
    //Advanced settings
    div: "map",
    auto_load: "yes",
    url_new_tab: "yes",
    images_directory: "/static/lib/simplemaps/public/images/",
    fade_time: 0.1,
    import_labels: "no",
    link_text: "View Website",
    state_image_url: "",
    state_image_position: "",
    location_image_url: ""
  },
  //STATE Tab of the online solution
    state_specific: {

  //STATES WITH POTENTIAL DRAW

  AZ: {
    name: "Arizona",
    color: "#DC0B10",
    hover_color: "green",
    description: "11 Electoral votes <br> Likely to win : <img src='/public/images/D.png'style='width: 30px; height: 30px;'/"
  },
  GA: {
    name: "Georgia",
    color: "#033A90",
    hover_color: "green",
    description: "16 Electoral votes <br> Likely to win : <img src='/public/images/R.png'style='width: 30px; height: 30px;'/"
  },
  MI: {
    name: "Michigan",
    color: "#033A90",
    hover_color: "green",
    description: "15 Electoral votes <br> Likely to win : <img src='/public/images/D.png'style='width: 30px; height: 30px;'/"
  },
  NV: {
    name: "Nevada",
    color: "#033A90",
    hover_color: "green",
    description: "6 Electoral votes <br> Likely to win : <img src='/public/images/D.png'style='width: 30px; height: 30px;'/"
  },
  PA: {
    name: "Pennsylvania",
    color: "#DC0B10",
    hover_color: "green",
    description: "19 Electoral votes <br> Likely to win : <img src='/public/images/R.png'style='width: 30px; height: 30px;'/"
  },
  WI: {
    name: "Wisconsin",
    color: "#DC0B10",
    hover_color: "green",
    description: "10 Electoral votes <br> Likely to win : <img src='/public/images/D.png'style='width: 30px; height: 30px;'/"
  },

  //OTHER STATES
      HI: {
      name: "Hawaii",
      color: "#033A90",
      hover_color: "green",
      description: "4 Electoral votes <br> Win probability : <img src='/public/images/D.png'style='width: 30px; height: 30px;'/>"
    },
    AK: {
      name: "Alaska",
      color: "#DC0B10",
      hover_color: "green",
      description: "3 Electoral votes <br> Win probability : <img src='/public/images/R.png'style='width: 30px; height: 30px;'/>"
    },
    FL: {
      name: "Florida",
      color: "#DC0B10",
      hover_color: "green",
      description: "30 Electoral votes <br> Win probability : <img src='/public/images/R.png'style='width: 30px; height: 30px;'/>"
    },
    NH: {
      name: "New Hampshire",
      color: "#033A90",
      hover_color: "green",
      description: "4 Electoral votes <br> Win probability : <img src='/public/images/D.png'style='width: 30px; height: 30px;'/>"
    },
    VT: {
      name: "Vermont",
      color: "#033A90",
      hover_color: "green",
      description: "3 Electoral votes <br> Win probability : <img src='/public/images/D.png'style='width: 30px; height: 30px;'/>"
    },
    ME: {
      name: "Maine",
      color: "#033A90",
      hover_color: "green",
      description: "4 Electoral votes <br> Win probability : 3 for <img src='/public/images/D.png'style='width: 30px; height: 30px;'/> and 1 for <img src='/public/images/R.png'style='width: 30px; height: 30px;'/>"
    },
    RI: {
      name: "Rhode Island",
      color: "#033A90",
      hover_color: "green",
      description: "4 Electoral votes <br> Win probability : <img src='/public/images/D.png'style='width: 30px; height: 30px;'/>"
    },
    NY: {
      name: "New York",
      color: "#033A90",
      hover_color: "green",
      description: "28 Electoral votes <br> Win probability : <img src='/public/images/D.png'style='width: 30px; height: 30px;'/>"
    },
    NJ: {
      name: "New Jersey",
      color: "#033A90",
      hover_color: "green",
      description: "14 Electoral votes <br> Win probability : <img src='/public/images/D.png'style='width: 30px; height: 30px;'/>"
    },
    DE: {
      name: "Delaware",
      color: "#033A90",
      hover_color: "green",
      description: "3 Electoral votes <br> Win probability : <img src='/public/images/D.png'style='width: 30px; height: 30px;'/>"
    },
    MD: {
      name: "Maryland",
      color: "#033A90",
      hover_color: "green",
      description: "10 Electoral votes <br> Win probability : <img src='/public/images/D.png'style='width: 30px; height: 30px;'/>"
    },
    VA: {
      name: "Virginia",
      color: "#033A90",
      hover_color: "green",
      description: "13 Electoral votes <br> Win probability : <img src='/public/images/D.png'style='width: 30px; height: 30px;'/>"
    },
    WV: {
      name: "West Virginia",
      color: "#DC0B10",
      hover_color: "green",
      description: "4 Electoral votes <br> Win probability : <img src='/public/images/R.png'style='width: 30px; height: 30px;'/>"
    },
    OH: {
      name: "Ohio",
      color: "#DC0B10",
      hover_color: "green",
      description: "17 Electoral votes <br> Win probability : <img src='/public/images/R.png'style='width: 30px; height: 30px;'/>"
    },
    IN: {
      name: "Indiana",
      color: "#DC0B10",
      hover_color: "green",
      description: "11 Electoral votes <br> Win probability : <img src='/public/images/R.png'style='width: 30px; height: 30px;'/>"
    },
    IL: {
      name: "Illinois",
      color: "#033A90",
      hover_color: "green",
      description: "19 Electoral votes <br> Win probability : <img src='/public/images/D.png'style='width: 30px; height: 30px;'/>"
    },
    CT: {
      name: "Connecticut",
      color: "#033A90",
      hover_color: "green",
      description: "7 Electoral votes <br> Win probability : <img src='/public/images/D.png'style='width: 30px; height: 30px;'/>"
    },
     NC: {
      name: "North Carolina",
      color: "#DC0B10",
      hover_color: "green",
      description: "16 Electoral votes <br> Win probability : <img src='/public/images/R.png'style='width: 30px; height: 30px;'/>"
    },
    DC: {
      name: "District of Columbia",
      color: "#033A90",
      hover_color: "green",
      description: "3 Electoral votes <br> Win probability : <img src='/public/images/D.png'style='width: 30px; height: 30px;'/>"
    },
    MA: {
      name: "Massachusetts",
      color: "#033A90",
      hover_color: "green",
      description: "11 Electoral votes <br> Win probability : <img src='/public/images/D.png'style='width: 30px; height: 30px;'/>"
    },
    TN: {
      name: "Tennessee",
      color: "#DC0B10",
      hover_color: "green",
      description: "11 Electoral votes <br> Win probability : <img src='/public/images/R.png'style='width: 30px; height: 30px;'/>"
    },
    AR: {
      name: "Arkansas",
      color: "#DC0B10",
      hover_color: "green",
      description: "6 Electoral votes <br> Win probability : <img src='/public/images/R.png'style='width: 30px; height: 30px;'/>"
    },
    MO: {
      name: "Missouri",
      color: "#DC0B10",
      hover_color: "green",
      description: "10 Electoral votes <br> Win probability : <img src='/public/images/R.png'style='width: 30px; height: 30px;'/>"
    },
    SC: {
      name: "South Carolina",
      color: "#DC0B10",
      hover_color: "green",
      description: "9 Electoral votes <br> Win probability : <img src='/public/images/R.png'style='width: 30px; height: 30px;'/>"
    },
    KY: {
      name: "Kentucky",
      color: "#DC0B10",
      hover_color: "green",
      description: "8 Electoral votes <br> Win probability : <img src='/public/images/R.png'style='width: 30px; height: 30px;'/>"
    },
    AL: {
      name: "Alabama",
      color: "#DC0B10",
      hover_color: "green",
      description: "9 Electoral votes <br> Win probability : <img src='/public/images/R.png'style='width: 30px; height: 30px;'/>"
    },
    LA: {
      name: "Louisiana",
      color: "#DC0B10",
      hover_color: "green",
      description: "8 Electoral votes <br> Win probability : <img src='/public/images/R.png'style='width: 30px; height: 30px;'/>"
    },
    MS: {
      name: "Mississippi",
      color: "#DC0B10",
      hover_color: "green",
      description: "6 Electoral votes <br> Win probability : <img src='/public/images/R.png'style='width: 30px; height: 30px;'/>"
    },
    IA: {
      name: "Iowa",
      color: "#DC0B10",
      hover_color: "green",
      description: "6 Electoral votes <br> Win probability : <img src='/public/images/R.png'style='width: 30px; height: 30px;'/>"
    },
    MN: {
      name: "Minnesota",
      color: "#033A90",
      hover_color: "green",
      description: "10 Electoral votes <br> Win probability : <img src='/public/images/D.png'style='width: 30px; height: 30px;'/>"
    },
    OK: {
      name: "Oklahoma",
      color: "#DC0B10",
      hover_color: "green",
      description: "7 Electoral votes <br> Win probability : <img src='/public/images/R.png'style='width: 30px; height: 30px;'/>"
    },
    TX: {
      name: "Texas",
      color: "#DC0B10",
      hover_color: "green",
      description: "40 Electoral votes <br> Win probability : <img src='/public/images/R.png'style='width: 30px; height: 30px;'/>"
    },
    NM: {
      name: "New Mexico",
      color: "#033A90",
      hover_color: "green",
      description: "5 Electoral votes <br> Win probability : <img src='/public/images/D.png'style='width: 30px; height: 30px;'/>"
    },
    KS: {
      name: "Kansas",
      color: "#DC0B10",
      hover_color: "green",
      description: "6 Electoral votes <br> Win probability : <img src='/public/images/R.png'style='width: 30px; height: 30px;'/>"
    },
    NE: {
      name: "Nebraska",
      color: "#DC0B10",
      hover_color: "green",
      description: "5 Electoral votes <br> Win probability: 4 for <img src='/public/images/R.png'style='width: 30px; height: 30px;'/> and 1 for <img src='/public/images/D.png'style='width: 30px; height: 30px;'/>"
    },
    SD: {
      name: "South Dakota",
      color: "#DC0B10",
      hover_color: "green",
      description: "3 Electoral votes <br> Win probability : <img src='/public/images/R.png'style='width: 30px; height: 30px;'/>"
    },
    ND: {
      name: "North Dakota",
      color: "#DC0B10",
      hover_color: "green",
      description: "3 Electoral votes <br> Win probability : <img src='/public/images/R.png'style='width: 30px; height: 30px;'/>"
    },
    WY: {
      name: "Wyoming",
      color: "#DC0B10",
      hover_color: "green",
      description: "3 Electoral votes <br> Win probability : <img src='/public/images/R.png'style='width: 30px; height: 30px;'/>"
    },
    MT: {
      name: "Montana",
      color: "#DC0B10",
      hover_color: "green",
      description: "4 Electoral votes <br> Win probability : <img src='/public/images/R.png'style='width: 30px; height: 30px;'/>"
    },
    CO: {
      name: "Colorado",
      color: "#033A90",
      hover_color: "green",
      description: "10 Electoral votes <br> Win probability : <img src='/public/images/D.png'style='width: 30px; height: 30px;'/>"
    },
    UT: {
      name: "Utah",
      color: "#DC0B10",
      hover_color: "green",
      description: "6 Electoral votes <br> Win probability : <img src='/public/images/R.png'style='width: 30px; height: 30px;'/>"
    },
     OR: {
      name: "Oregon",
      color: "#033A90",
      hover_color: "green",
      description: "8 Electoral votes <br> Win probability : <img src='/public/images/D.png'style='width: 30px; height: 30px;'/>"
    },
    WA: {
      name: "Washington",
      color: "#033A90",
      hover_color: "green",
      description: "12 Electoral votes <br> Win probability : <img src='/public/images/D.png'style='width: 30px; height: 30px;'/>"
    },
    CA: {
      name: "California",
      color: "#033A90",
      hover_color: "green",
      description: "54 Electoral votes <br> Win probability : <img src='/public/images/D.png'style='width: 30px; height: 30px;'/>"
    },
    ID: {
      name: "Idaho",
      color: "#DC0B10",
      hover_color: "green",
      description: "4 Electoral votes <br> Win probability : <img src='/public/images/R.png'style='width: 30px; height: 30px;'/>"
    },
    GU: {
      name: "Guam",
      hide: "yes"
    },
    VI: {
      name: "Virgin Islands",
      hide: "yes"
    },
    PR: {
      name: "Puerto Rico",
      hide: "yes"
    },
    MP: {
      name: "Northern Mariana Islands",
      hide: "yes"
    },
    AS: {
      name: "American Samoa",
      hide: "yes"
    },
    invisible_1: {
		inactive: "no",
		name: "State of Maine",
		color: "#033A90",
		hover_color: "green",
		description: "2 Electoral votes <br> Win probability: <img src='/public/images/D.png'style='width: 30px; height: 30px;'/>",
    },
    invisible_2: {
      name: "invisible_2",
      inactive: "no",
	  name: "Maine District 1",
	  color: "#033A90", 
	  hover_color: "green",
	  description: "1 Electoral vote <br> Win probability: <img src='/public/images/D.png'style='width: 30px; height: 30px;'/>",
     },
    invisible_3: {
      inactive: "no",
	  name: "Maine District 2",
	  color: "#DC0B10", 
	  hover_color: "green",
	  description: "1 Electoral vote <br> Win probability: <img src='/public/images/R.png'style='width: 30px; height: 30px;'/>",
    },
    invisible_4: {
      inactive: "no",
	  name: "State of Nebraska",
	  color: "#DC0B10",  
	  hover_color: "green",
	  description: "2 Electoral votes <br> Win probability: <img src='/public/images/R.png'style='width: 30px; height: 30px;'/>",
    },
    invisible_5: {
      inactive: "no",
	  name: "Nebraska District 1",
	  color: "#DC0B10",
	  hover_color: "green",
	  description: "1 Electoral vote <br> Win probability: <img src='/public/images/R.png'style='width: 30px; height: 30px;'/>",
    },
    invisible_6: {
      inactive: "no",
	  name: "Nebraska District 2",
	  color: "#033A90",
	  hover_color: "green",
	  description: "1 Electoral vote <br> Win probability: <img src='/public/images/D.png'style='width: 30px; height: 30px;'/>",
    },
    invisible_7: {
      inactive: "no",
	  name: "Nebraska District 3",
	  color: "#DC0B10",
	  hover_color: "green",
	  description: "1 Electoral vote <br> Wwin probability: <img src='/public/images/R.png'style='width: 30px; height: 30px;'/>",
    },
  },
  
  //LOCATIONS
  locations: {
    "0": {
      name: "New York City",
      lat: 40.7143528,
      lng: -74.0059731,
	  color: "",
      size: "",
      type: "",
    },
    "1": {
      name: "Anchorage",
      lat: 61.2180556,
      lng: -149.9002778,
	  color: "",
      size: "",
      type: "",
    }
  },
  
  //LABELS
  labels: {
    "0": {
      name: "ME",
	  x: "855",
	  y: "419",
      parent_id: "invisible_1",
      parent_type: "state",
      pill: "yes",
      width: 25,
	  size: "15", //font size
	  color: "white", //font color
      hover_color: "white", //font color

    },
    "1": {
      name: "D1",
      x: "890",
      y: "419",
      parent_type: "state",
      parent_id: "invisible_2",
      pill: "yes",
      width: 25,
	  size: "15",
	  color: "white", //font color
      hover_color: "white", //font color

    },
    "3": {
      name: "D2",
      x: "915",
      y: "419",
      parent_id: "invisible_3",
      parent_type: "state",
      pill: "yes",
      width: 25,
	  size: "15",
	  color: "white", //font color
      hover_color: "white", //font color
    },
    "4": {
      name: "NE",
      x: "855",
      y: "450",
      parent_type: "state",
      parent_id: "invisible_4",
      pill: "yes",
      width: 25,
	  size: "15",
	  color: "white", //font color
      hover_color: "white", //font color
    },
    "5": {
      name: "D1",
      x: "890",
      y: "450",
      parent_id: "invisible_5",
      parent_type: "state",
      pill: "yes",
      width: 25,
	  size: "15",
	  color: "white", //font color
      hover_color: "white", //font color
    },
    "6": {
      name: "D2",
      x: "915",
      y: "450",
      parent_type: "state",
      parent_id: "invisible_6",
      pill: "yes",
      width: 25,
	  size: "15",
	  color: "white", //font color
      hover_color: "white", //font color
    },
    "7": {
      name: "D3",
      x: "940",
      y: "450",
      parent_id: "invisible_7",
      parent_type: "state",
      pill: "yes",
      width: 25,
	  size: "15",
	  color: "white", //font color
      hover_color: "white", //font color
    },

    // States with 2 pills
    "8": {
      x: "890",
      y: "92",
      parent_id: "ME",
      display: "all",
      color: "#d5ddec",
      pill: "yes",
      size: "12"
    },
    "9": {
      x: "423",
      y: "223",
      parent_id: "NE",
      display: "all",
      color: "#d5ddec",
      pill: "yes",
      size: "18"
    },
  
 
		//STATE drawn through a pill
     ME: {
        parent_id: "ME",
        x: "810",
        y: "420",
        pill: "yes",
        width: 45,
        display: "all"
      },
        NE: {
        parent_id: "NE",
        x: "810",
        y: "450",
        pill: "yes",
        width: 45,
        display: "all"
      },
  
	  	
    NH: {
      parent_id: "NH",
      x: "932",
      y: "183",
      pill: "yes",
      width: 45,
      display: "all"
    },
    VT: {
      parent_id: "VT",
      x: "932",
      y: "213",
      pill: "yes",
      width: 45,
      display: "all"
    },
    MA: {
      parent_id: "MA",
      x: "932",
      y: "243",
      pill: "yes",
      width: 45,
      display: "all"
    },
    CT: {
      parent_id: "CT",
      x: "883",
      y: "243",
      pill: "yes",
      width: 45,
      display: "all"
    },
    RI: {
      parent_id: "RI",
      x: "932",
      y: "273",
      pill: "yes",
      width: 45,
      display: "all"
    },
    NJ: {
      parent_id: "NJ",
      x: "883",
      y: "273",
      pill: "yes",
      width: 45,
      display: "all"
    },
    DE: {
      parent_id: "DE",
      x: "883",
      y: "303",
      pill: "yes",
      width: 45,
      display: "all"
    },
    MD: {
      parent_id: "MD",
      x: "932",
      y: "303",
      pill: "yes",
      width: 45,
      display: "all"
    },
    DC: {
      parent_id: "DC",
      x: "884",
      y: "332",
      pill: "yes",
      width: 45,
      display: "all"
    },

	
		//OTHER STATES
    HI: {
      parent_id: "HI",
      x: 305,
      y: 565,
      pill: "yes"
    },
    AK: {
      parent_id: "AK",
      x: "113",
      y: "495"
    },
    FL: {
      parent_id: "FL",
      x: "773",
      y: "510"
    },

	NY: {
      parent_id: "NY",
      x: "815",
      y: "158"
    },
    PA: {
      parent_id: "PA",
      x: "786",
      y: "210"
    },
    VA: {
      parent_id: "VA",
      x: "790",
      y: "282"
    },
    WV: {
      parent_id: "WV",
      x: "744",
      y: "270"
    },
    OH: {
      parent_id: "OH",
      x: "700",
      y: "240"
    },
    IN: {
      parent_id: "IN",
      x: "650",
      y: "250"
    },
    IL: {
      parent_id: "IL",
      x: "600",
      y: "250"
    },
    WI: {
      parent_id: "WI",
      x: "575",
      y: "155"
    },
    NC: {
      parent_id: "NC",
      x: "784",
      y: "326"
    },
    TN: {
      parent_id: "TN",
      x: "655",
      y: "340"
    },
    AR: {
      parent_id: "AR",
      x: "548",
      y: "368"
    },
    MO: {
      parent_id: "MO",
      x: "548",
      y: "293"
    },
    GA: {
      parent_id: "GA",
      x: "718",
      y: "405"
    },
    SC: {
      parent_id: "SC",
      x: "760",
      y: "371"
    },
    KY: {
      parent_id: "KY",
      x: "680",
      y: "300"
    },
    AL: {
      parent_id: "AL",
      x: "655",
      y: "405"
    },
    LA: {
      parent_id: "LA",
      x: "550",
      y: "435"
    },
    MS: {
      parent_id: "MS",
      x: "600",
      y: "405"
    },
    IA: {
      parent_id: "IA",
      x: "525",
      y: "210"
    },
    MN: {
      parent_id: "MN",
      x: "506",
      y: "124"
    },
    OK: {
      parent_id: "OK",
      x: "460",
      y: "360"
    },
    TX: {
      parent_id: "TX",
      x: "425",
      y: "435"
    },
    NM: {
      parent_id: "NM",
      x: "305",
      y: "365"
    },
    KS: {
      parent_id: "KS",
      x: "445",
      y: "290"
    },
    
    SD: {
      parent_id: "SD",
      x: "413",
      y: "160"
    },
    ND: {
      parent_id: "ND",
      x: "416",
      y: "96"
    },
    WY: {
      parent_id: "WY",
      x: "300",
      y: "180"
    },
    MT: {
      parent_id: "MT",
      x: "280",
      y: "95"
    },
    CO: {
      parent_id: "CO",
      x: "320",
      y: "275"
    },
    UT: {
      parent_id: "UT",
      x: "223",
      y: "260"
    },
    AZ: {
      parent_id: "AZ",
      x: "205",
      y: "360"
    },
    NV: {
      parent_id: "NV",
      x: "140",
      y: "235"
    },
    OR: {
      parent_id: "OR",
      x: "100",
      y: "120"
    },
    WA: {
      parent_id: "WA",
      x: "130",
      y: "55"
    },
    ID: {
      parent_id: "ID",
      x: "200",
      y: "150"
    },
    CA: {
      parent_id: "CA",
      x: "79",
      y: "285"
    },
    MI: {
      parent_id: "MI",
      x: "663",
      y: "185"
    },
    PR: {
      parent_id: "PR",
      x: "620",
      y: "545"
    },
    GU: {
      parent_id: "GU",
      x: "550",
      y: "540"
    },
    VI: {
      parent_id: "VI",
      x: "680",
      y: "519"
    },
    MP: {
      parent_id: "MP",
      x: "570",
      y: "575"
    },
    AS: {
      parent_id: "AS",
      x: "665",
      y: "580"
    }
  },
};

var republicansVotes = 275;
var democratsVotes = 263;
    

legend: {
  entries: []
}
regions: {}

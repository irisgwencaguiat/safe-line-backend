<?php

namespace Database\Seeders;

use App\Models\Symptom;
use Illuminate\Database\Seeder;

class SymptomSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Symptom::create([
            "id" => "s_1",
            "type" => "symptom",
            "name" => "Mouth ulcers",
            "common_name" => "Mouth ulcers",
        ]);
        Symptom::create([
            "id" => "s_2",
            "type" => "symptom",
            "name" => "Sexual intercourse in recent months",
            "common_name" => "Sexual intercourse in recent months",
        ]);
        Symptom::create([
            "id" => "s_3",
            "type" => "symptom",
            "name" => "Activity related to sex despite negative consequences",
            "common_name" =>
                "Activity related to sex despite negative consequences",
        ]);
        Symptom::create([
            "id" => "s_4",
            "type" => "symptom",
            "name" => "Apathy",
            "common_name" => "Lack of interest, enthusiasm, or concern",
        ]);
        Symptom::create([
            "id" => "s_6",
            "type" => "symptom",
            "name" => "Appetite for salty foods",
            "common_name" => "Appetite for salty foods",
        ]);
        Symptom::create([
            "id" => "s_7",
            "type" => "symptom",
            "name" => "Female infertility",
            "common_name" => "Female infertility",
        ]);
        Symptom::create([
            "id" => "s_8",
            "type" => "symptom",
            "name" => "Diarrhea",
            "common_name" => "Diarrhea",
        ]);
        Symptom::create([
            "id" => "s_9",
            "type" => "symptom",
            "name" => "Pale skin",
            "common_name" => "Pale skin",
        ]);
        Symptom::create([
            "id" => "s_10",
            "type" => "symptom",
            "name" => "Pale and brittle nails",
            "common_name" => "Pale and brittle nails",
        ]);
        Symptom::create([
            "id" => "s_11",
            "type" => "symptom",
            "name" => "Joint pain, hip",
            "common_name" => "Joint pain, hip",
        ]);
        Symptom::create([
            "id" => "s_13",
            "type" => "symptom",
            "name" => "Abdominal pain",
            "common_name" => "Stomach pain",
        ]);
        Symptom::create([
            "id" => "s_14",
            "type" => "symptom",
            "name" => "Abdominal pain, exacerbating on an empty stomach",
            "common_name" => "Stomach pain on empty stomach",
        ]);
        Symptom::create([
            "id" => "s_15",
            "type" => "symptom",
            "name" =>
                "Abdominal pain, exacerbating during coughing or movement",
            "common_name" => "Stomach pain worsens when coughing or moving",
        ]);
        Symptom::create([
            "id" => "s_16",
            "type" => "symptom",
            "name" => "Abdominal pain, postprandial",
            "common_name" => "Stomach pain after eating",
        ]);
        Symptom::create([
            "id" => "s_17",
            "type" => "symptom",
            "name" => "Abdominal pain, premenstrual",
            "common_name" => "Cramps before period",
        ]);
        Symptom::create([
            "id" => "s_19",
            "type" => "symptom",
            "name" => "Gum pain",
            "common_name" => "Gum pain",
        ]);
        Symptom::create([
            "id" => "s_20",
            "type" => "symptom",
            "name" => "Pharyngeal pain",
            "common_name" => "Sore throat",
        ]);
        Symptom::create([
            "id" => "s_21",
            "type" => "symptom",
            "name" => "Headache",
            "common_name" => "Headache",
        ]);
        Symptom::create([
            "id" => "s_22",
            "type" => "symptom",
            "name" => "Headache, unilateral",
            "common_name" => "Headache located on only one side",
        ]);
        Symptom::create([
            "id" => "s_23",
            "type" => "symptom",
            "name" => "Headache, pressing",
            "common_name" => "Pressing or squeezing headache",
        ]);
        Symptom::create([
            "id" => "s_24",
            "type" => "symptom",
            "name" => "Headache, generalized",
            "common_name" => "Headache located all over head",
        ]);
        Symptom::create([
            "id" => "s_25",
            "type" => "symptom",
            "name" => "Headache, pulsating",
            "common_name" => "Pulsing headache",
        ]);
        Symptom::create([
            "id" => "s_28",
            "type" => "symptom",
            "name" => "Pain in crotch",
            "common_name" => "Crotch pain",
        ]);
        Symptom::create([
            "id" => "s_30",
            "type" => "symptom",
            "name" => "Chest pain, exacerbating with deep breath or cough",
            "common_name" => "Chest pain worsening with deep breath or cough",
        ]);
        Symptom::create([
            "id" => "s_31",
            "type" => "symptom",
            "name" => "Chest pain, continues after rest",
            "common_name" => "Chest pain continuing after rest",
        ]);
        Symptom::create([
            "id" => "s_32",
            "type" => "symptom",
            "name" => "Painful intercourse",
            "common_name" => "Painful sex",
        ]);
        Symptom::create([
            "id" => "s_33",
            "type" => "symptom",
            "name" => "Painful ejaculation",
            "common_name" => "Painful ejaculation",
        ]);
        Symptom::create([
            "id" => "s_34",
            "type" => "symptom",
            "name" => "Pain in crotch, sudden",
            "common_name" => "Sudden crotch pain",
        ]);
        Symptom::create([
            "id" => "s_35",
            "type" => "symptom",
            "name" => "Chest pain, during exertion",
            "common_name" => "Chest pain on exertion",
        ]);
        Symptom::create([
            "id" => "s_36",
            "type" => "symptom",
            "name" => "Chest pain, radiating to the neck",
            "common_name" => "Chest pain spreading to the neck",
        ]);
        Symptom::create([
            "id" => "s_37",
            "type" => "symptom",
            "name" => "Chest pain, radiating between shoulder blades",
            "common_name" =>
                "Chest pain spreading to between the shoulder blades",
        ]);
        Symptom::create([
            "id" => "s_38",
            "type" => "symptom",
            "name" => "Back pain, lumbar, radiates to back of the thigh",
            "common_name" =>
                "Lower back pain spreading to the back of the thigh or knee",
        ]);
        Symptom::create([
            "id" => "s_39",
            "type" => "symptom",
            "name" => "Pain while urinating",
            "common_name" => "Pain while urinating",
        ]);
        Symptom::create([
            "id" => "s_41",
            "type" => "symptom",
            "name" => "Joint pain, severe, after trauma",
            "common_name" => "Severe joint pain after an injury",
        ]);
        Symptom::create([
            "id" => "s_43",
            "type" => "symptom",
            "name" => "Skin pain, severe",
            "common_name" => "Severe skin pain",
        ]);
        Symptom::create([
            "id" => "s_44",
            "type" => "symptom",
            "name" => "Joint pain",
            "common_name" => "Joint pain",
        ]);
        Symptom::create([
            "id" => "s_47",
            "type" => "symptom",
            "name" => "Earache",
            "common_name" => "Earache",
        ]);
        Symptom::create([
            "id" => "s_48",
            "type" => "symptom",
            "name" => "Chest pain, subsides during rest",
            "common_name" => "Chest pain subsiding during rest",
        ]);
        Symptom::create([
            "id" => "s_50",
            "type" => "symptom",
            "name" => "Chest pain",
            "common_name" => "Chest pain",
        ]);
        Symptom::create([
            "id" => "s_51",
            "type" => "symptom",
            "name" => "Chest pain, diffuse",
            "common_name" => "Widespread chest pain",
        ]);
        Symptom::create([
            "id" => "s_52",
            "type" => "symptom",
            "name" => "Pain in scrotum",
            "common_name" => "Pain in scrotum",
        ]);
        Symptom::create([
            "id" => "s_53",
            "type" => "symptom",
            "name" => "Back pain, lumbar",
            "common_name" => "Lower back pain",
        ]);
        Symptom::create([
            "id" => "s_54",
            "type" => "symptom",
            "name" => "Pain near eye socket",
            "common_name" => "Pain near eye socket",
        ]);
        Symptom::create([
            "id" => "s_55",
            "type" => "symptom",
            "name" => "Toothache after contact with cold, sweet, or hot food",
            "common_name" =>
                "Toothache after contact with cold, sweet, or hot food",
        ]);
        Symptom::create([
            "id" => "s_56",
            "type" => "symptom",
            "name" => "Toothache when chewing",
            "common_name" => "Tooth hurts when chewing",
        ]);
        Symptom::create([
            "id" => "s_57",
            "type" => "symptom",
            "name" =>
                "Abdominal pain, reduced by defecation or relieving flatulence",
            "common_name" =>
                "Stomach pain improves after bowel movement or passing gas",
        ]);
        Symptom::create([
            "id" => "s_59",
            "type" => "symptom",
            "name" => "Dysmenorrhea",
            "common_name" => "Painful periods",
        ]);
        Symptom::create([
            "id" => "s_60",
            "type" => "symptom",
            "name" => "Pain in glans penis",
            "common_name" => "Pain of the head of the penis",
        ]);
        Symptom::create([
            "id" => "s_64",
            "type" => "symptom",
            "name" => "Vaginal discharge with unpleasant odour",
            "common_name" => "Vaginal discharge with unpleasant odour",
        ]);
        Symptom::create([
            "id" => "s_65",
            "type" => "symptom",
            "name" => "Halitosis",
            "common_name" => "Bad breath",
        ]);
        Symptom::create([
            "id" => "s_67",
            "type" => "symptom",
            "name" => "Snoring",
            "common_name" => "Snoring",
        ]);
        Symptom::create([
            "id" => "s_68",
            "type" => "symptom",
            "name" => "Dysphonia",
            "common_name" => "Hoarse voice",
        ]);
        Symptom::create([
            "id" => "s_69",
            "type" => "symptom",
            "name" => "Preoccupation with food",
            "common_name" => "Preoccupation with food",
        ]);
        Symptom::create([
            "id" => "s_71",
            "type" => "symptom",
            "name" => "Black stools",
            "common_name" => "Black stools",
        ]);
        Symptom::create([
            "id" => "s_72",
            "type" => "symptom",
            "name" => "Red and stinging conjunctivae",
            "common_name" => "Red and stinging eyes",
        ]);
        Symptom::create([
            "id" => "s_73",
            "type" => "symptom",
            "name" => "Red stretch marks on abdomen, hips, or thighs",
            "common_name" => "Red stretch marks on stomach, hips, or thighs",
        ]);
        Symptom::create([
            "id" => "s_74",
            "type" => "symptom",
            "name" =>
                "Sexual activity more often or with more partners than intended",
            "common_name" =>
                "Sexual activity more often or with more partners than intended",
        ]);
        Symptom::create([
            "id" => "s_75",
            "type" => "symptom",
            "name" => "Frequent urination, large quantities",
            "common_name" => "Frequent urination in large quantities",
        ]);
        Symptom::create([
            "id" => "s_79",
            "type" => "symptom",
            "name" => "Joint pain, hallux",
            "common_name" => "Big toe pain",
        ]);
        Symptom::create([
            "id" => "s_80",
            "type" => "symptom",
            "name" =>
                "Irritability when unable to engage in activity related to sex",
            "common_name" =>
                "Irritability when unable to engage in activity related to sex",
        ]);
        Symptom::create([
            "id" => "s_81",
            "type" => "symptom",
            "name" => "Chills",
            "common_name" => "Chills",
        ]);
        Symptom::create([
            "id" => "s_84",
            "type" => "symptom",
            "name" => "Tremors, subside after drinking alcohol",
            "common_name" => "Trembling subsiding after alcohol",
        ]);
        Symptom::create([
            "id" => "s_85",
            "type" => "symptom",
            "name" => "Head tremors",
            "common_name" => "Head tremors",
        ]);
        Symptom::create([
            "id" => "s_86",
            "type" => "symptom",
            "name" => "Tremors, in one hand",
            "common_name" => "Trembling of one hand",
        ]);
        Symptom::create([
            "id" => "s_87",
            "type" => "symptom",
            "name" => "Tremors, both hands",
            "common_name" => "Trembling of both hands",
        ]);
        Symptom::create([
            "id" => "s_88",
            "type" => "symptom",
            "name" => "Dyspnea",
            "common_name" => "Shortness of breath",
        ]);
        Symptom::create([
            "id" => "s_90",
            "type" => "symptom",
            "name" => "Dyspnea, lasting between 1 day and 4 weeks",
            "common_name" =>
                "Shortness of breath lasting between 1 day and 1 month",
        ]);
        Symptom::create([
            "id" => "s_92",
            "type" => "symptom",
            "name" => "Dyspnea, started 1 hour ago",
            "common_name" => "Shortness of breath starting within the hour",
        ]);
        Symptom::create([
            "id" => "s_93",
            "type" => "symptom",
            "name" => "Smoking large quantity of cigarettes",
            "common_name" => "Smoking a lot",
        ]);
        Symptom::create([
            "id" => "s_97",
            "type" => "symptom",
            "name" => "Deep filling of treated tooth",
            "common_name" => "Deep filling of treated tooth",
        ]);
        Symptom::create([
            "id" => "s_98",
            "type" => "symptom",
            "name" => "Fever",
            "common_name" => "Fever",
        ]);
        Symptom::create([
            "id" => "s_99",
            "type" => "symptom",
            "name" => "Fever between 98 and 100.4°F (37 and 38°C)",
            "common_name" => "Fever between 98 and 100.4°F (37 and 38°C)",
        ]);
        Symptom::create([
            "id" => "s_100",
            "type" => "symptom",
            "name" => "Fever between 100.4 and 104°F (38 and 40°C)",
            "common_name" => "Fever between 100.4 and 104°F (38 and 40°C)",
        ]);
        Symptom::create([
            "id" => "s_101",
            "type" => "symptom",
            "name" => "Papule or nodule smaller than 1 cm in diameter",
            "common_name" => "Skin bump less than 1 cm in diameter",
        ]);
        Symptom::create([
            "id" => "s_102",
            "type" => "symptom",
            "name" => "Cough",
            "common_name" => "Cough",
        ]);
        Symptom::create([
            "id" => "s_103",
            "type" => "symptom",
            "name" => "Cough, lasting less than 3 weeks",
            "common_name" => "Cough lasting less than 3 weeks",
        ]);
        Symptom::create([
            "id" => "s_104",
            "type" => "symptom",
            "name" => "Cough, productive",
            "common_name" => "Coughing up phlegm",
        ]);
        Symptom::create([
            "id" => "s_105",
            "type" => "symptom",
            "name" => "Cough, dry",
            "common_name" => "Dry cough",
        ]);
        Symptom::create([
            "id" => "s_106",
            "type" => "symptom",
            "name" => "Cough, lasting more than 8 weeks",
            "common_name" => "Cough lasting more than 8 weeks",
        ]);
        Symptom::create([
            "id" => "s_107",
            "type" => "symptom",
            "name" => "Nasal catarrh",
            "common_name" => "Runny nose",
        ]);
        Symptom::create([
            "id" => "s_108",
            "type" => "symptom",
            "name" => "Deepening of periodontal pockets",
            "common_name" => "Deepened spaces between the gums and the teeth",
        ]);
        Symptom::create([
            "id" => "s_109",
            "type" => "symptom",
            "name" => "Drinking alcohol to ease hangover",
            "common_name" => "Drinking alcohol to ease hangover",
        ]);
        Symptom::create([
            "id" => "s_110",
            "type" => "symptom",
            "name" => "Palpitations",
            "common_name" => "Palpitations",
        ]);
        Symptom::create([
            "id" => "s_111",
            "type" => "symptom",
            "name" => "Bleeding gums",
            "common_name" => "Bleeding gums",
        ]);
        Symptom::create([
            "id" => "s_112",
            "type" => "symptom",
            "name" => "Blood in stool",
            "common_name" => "Blood in stool",
        ]);
        Symptom::create([
            "id" => "s_113",
            "type" => "symptom",
            "name" => "Blood in urine",
            "common_name" => "Blood in urine",
        ]);
        Symptom::create([
            "id" => "s_115",
            "type" => "symptom",
            "name" => "Bleeding from anus",
            "common_name" => "Bleeding from anus",
        ]);
        Symptom::create([
            "id" => "s_116",
            "type" => "symptom",
            "name" => "Hemoptysis",
            "common_name" => "Coughing up blood",
        ]);
        Symptom::create([
            "id" => "s_117",
            "type" => "symptom",
            "name" => "Calf muscle spasms",
            "common_name" => "Cramps in calves",
        ]);
        Symptom::create([
            "id" => "s_118",
            "type" => "symptom",
            "name" => "Cold sensitivity",
            "common_name" => "Cold sensitivity",
        ]);
        Symptom::create([
            "id" => "s_120",
            "type" => "symptom",
            "name" => "Anxiety",
            "common_name" => "Anxiety",
        ]);
        Symptom::create([
            "id" => "s_121",
            "type" => "symptom",
            "name" => "Hair loss",
            "common_name" => "Hair loss",
        ]);
        Symptom::create([
            "id" => "s_122",
            "type" => "symptom",
            "name" => "Excessive tear production",
            "common_name" => "Watery eyes",
        ]);
        Symptom::create([
            "id" => "s_123",
            "type" => "symptom",
            "name" =>
                "Problems with everyday tasks such as washing, eating, dressing",
            "common_name" =>
                "Problems with everyday tasks such as washing, eating, dressing",
        ]);
        Symptom::create([
            "id" => "s_124",
            "type" => "symptom",
            "name" => "Scotoma",
            "common_name" => "Black spots in vision",
        ]);
        Symptom::create([
            "id" => "s_125",
            "type" => "symptom",
            "name" => "Paresthesia, both feet",
            "common_name" => "Feet tingling or numbness",
        ]);
        Symptom::create([
            "id" => "s_126",
            "type" => "symptom",
            "name" => "Paresthesia, around the mouth",
            "common_name" => "Tingling around the mouth",
        ]);
        Symptom::create([
            "id" => "s_127",
            "type" => "symptom",
            "name" => "Obsessions",
            "common_name" => "Obsessive thoughts",
        ]);
        Symptom::create([
            "id" => "s_132",
            "type" => "symptom",
            "name" => "Excess hair growth",
            "common_name" => "Excessive hair",
        ]);
        Symptom::create([
            "id" => "s_134",
            "type" => "symptom",
            "name" => "Difficulty not smoking first cigarette of the day",
            "common_name" =>
                "Difficulty not smoking first cigarette of the day",
        ]);
        Symptom::create([
            "id" => "s_136",
            "type" => "symptom",
            "name" => "Sneezing attacks",
            "common_name" => "Sneezing fits",
        ]);
        Symptom::create([
            "id" => "s_137",
            "type" => "symptom",
            "name" => "Binge eating attacks",
            "common_name" => "Binge eating",
        ]);
        Symptom::create([
            "id" => "s_139",
            "type" => "symptom",
            "name" => "Recurrent tonsils inflammation",
            "common_name" => "Recurrent tonsils inflammation",
        ]);
        Symptom::create([
            "id" => "s_142",
            "type" => "symptom",
            "name" => "Recurrent gastric ulcers",
            "common_name" => "Recurrent gastric ulcers",
        ]);
        Symptom::create([
            "id" => "s_143",
            "type" => "symptom",
            "name" => "Nervousness or weepiness",
            "common_name" => "Nervousness or weepiness",
        ]);
        Symptom::create([
            "id" => "s_145",
            "type" => "symptom",
            "name" => "Agitation",
            "common_name" => "Agitation",
        ]);
        Symptom::create([
            "id" => "s_146",
            "type" => "symptom",
            "name" => "Forgetting names of friends and family",
            "common_name" => "Forgetting names of friends and family",
        ]);
        Symptom::create([
            "id" => "s_147",
            "type" => "symptom",
            "name" => "History of anemia",
            "common_name" => "History of anemia",
        ]);
        Symptom::create([
            "id" => "s_148",
            "type" => "symptom",
            "name" => "Paresis, limbs",
            "common_name" => "Limb weakness",
        ]);
        Symptom::create([
            "id" => "s_149",
            "type" => "symptom",
            "name" => "Facial muscle paresis, unilateral",
            "common_name" => "Facial muscle weakness on one side of face",
        ]);
        Symptom::create([
            "id" => "s_150",
            "type" => "symptom",
            "name" => "Inability to stop drinking alcohol",
            "common_name" => "Inability to stop drinking alcohol",
        ]);
        Symptom::create([
            "id" => "s_152",
            "type" => "symptom",
            "name" => "Bleeding after intercourse",
            "common_name" => "Bleeding after intercourse",
        ]);
        Symptom::create([
            "id" => "s_153",
            "type" => "symptom",
            "name" => "Urinary incontinence",
            "common_name" => "Urinary incontinence",
        ]);
        Symptom::create([
            "id" => "s_155",
            "type" => "symptom",
            "name" => "Low self-esteem",
            "common_name" => "Low sense of self-worth",
        ]);
        Symptom::create([
            "id" => "s_156",
            "type" => "symptom",
            "name" => "Nausea",
            "common_name" => "Feeling sick or queasy",
        ]);
        Symptom::create([
            "id" => "s_157",
            "type" => "symptom",
            "name" => "Fear of obesity",
            "common_name" => "Fear of obesity",
        ]);
        Symptom::create([
            "id" => "s_158",
            "type" => "symptom",
            "name" => "Heavy or prolonged menstrual periods",
            "common_name" => "Heavy or prolonged periods",
        ]);
        Symptom::create([
            "id" => "s_159",
            "type" => "symptom",
            "name" => "Back pain, exacerbated by physical exertion",
            "common_name" => "Back pain worsening after physical activity",
        ]);
        Symptom::create([
            "id" => "s_161",
            "type" => "symptom",
            "name" =>
                "Symptoms regularly appear a few days before menstrual period",
            "common_name" =>
                "Symptoms regularly appear a few days before menstrual period",
        ]);
        Symptom::create([
            "id" => "s_162",
            "type" => "symptom",
            "name" =>
                "Symptoms appear after taking painkillers or a change in diet",
            "common_name" =>
                "Symptoms appear after taking painkillers or a change in diet",
        ]);
        Symptom::create([
            "id" => "s_169",
            "type" => "symptom",
            "name" => "Depressed mood",
            "common_name" => "Depressed mood",
        ]);
        Symptom::create([
            "id" => "s_170",
            "type" => "symptom",
            "name" => "Edema, knee joint",
            "common_name" => "Swollen knee",
        ]);
        Symptom::create([
            "id" => "s_171",
            "type" => "symptom",
            "name" => "Edema, one ankle",
            "common_name" => "Swollen ankle",
        ]);
        Symptom::create([
            "id" => "s_172",
            "type" => "symptom",
            "name" => "Swollen gums",
            "common_name" => "Swollen gums",
        ]);
        Symptom::create([
            "id" => "s_173",
            "type" => "symptom",
            "name" => "Edema, one lower limb",
            "common_name" => "Swollen leg",
        ]);
        Symptom::create([
            "id" => "s_174",
            "type" => "symptom",
            "name" => "Edema, joint",
            "common_name" => "Joint swelling",
        ]);
        Symptom::create([
            "id" => "s_175",
            "type" => "symptom",
            "name" => "Edema, both lower limbs",
            "common_name" => "Swollen legs",
        ]);
        Symptom::create([
            "id" => "s_176",
            "type" => "symptom",
            "name" => "Edema, scrotum",
            "common_name" => "Swollen scrotum",
        ]);
        Symptom::create([
            "id" => "s_177",
            "type" => "symptom",
            "name" => "Swollen cheek",
            "common_name" => "Swollen cheek",
        ]);
        Symptom::create([
            "id" => "s_180",
            "type" => "symptom",
            "name" => "Hypopigmentation of the skin",
            "common_name" => "Lightening of the skin",
        ]);
        Symptom::create([
            "id" => "s_181",
            "type" => "symptom",
            "name" => "Constant need for sex",
            "common_name" => "Constant need for sex",
        ]);
        Symptom::create([
            "id" => "s_182",
            "type" => "symptom",
            "name" => "Nocturia",
            "common_name" => "Urinating at night",
        ]);
        Symptom::create([
            "id" => "s_183",
            "type" => "symptom",
            "name" =>
                "Urination while coughing or laughing or during physical exertion",
            "common_name" =>
                "Urination while coughing or laughing or during physical exertion",
        ]);
        Symptom::create([
            "id" => "s_185",
            "type" => "symptom",
            "name" => "Oliguria",
            "common_name" => "Low urine output",
        ]);
        Symptom::create([
            "id" => "s_186",
            "type" => "symptom",
            "name" => "Restricted mobility, problem bending over",
            "common_name" => "Difficulty bending down",
        ]);
        Symptom::create([
            "id" => "s_189",
            "type" => "symptom",
            "name" => "Seizures with loss of consciousness",
            "common_name" => "Seizures with loss of consciousness",
        ]);
        Symptom::create([
            "id" => "s_190",
            "type" => "symptom",
            "name" => "Loss of consciousness, with urination or defecation",
            "common_name" => "Fainting with loss of bladder or bowel control",
        ]);
        Symptom::create([
            "id" => "s_191",
            "type" => "symptom",
            "name" => "Head drop",
            "common_name" => "Head drop",
        ]);
        Symptom::create([
            "id" => "s_192",
            "type" => "symptom",
            "name" => "Blepharoptosis",
            "common_name" => "Drooping eyelids",
        ]);
        Symptom::create([
            "id" => "s_194",
            "type" => "symptom",
            "name" => "Ulceration on nipple",
            "common_name" => "Ulceration on nipple",
        ]);
        Symptom::create([
            "id" => "s_195",
            "type" => "symptom",
            "name" => "Current cigarette smoking",
            "common_name" => "Current cigarette smoking",
        ]);
        Symptom::create([
            "id" => "s_196",
            "type" => "symptom",
            "name" => "Cigarette smoking during illness",
            "common_name" => "Cigarette smoking during illness",
        ]);
        Symptom::create([
            "id" => "s_198",
            "type" => "symptom",
            "name" => "Drinking large quantities of alcohol",
            "common_name" => "Drinking large quantities of alcohol",
        ]);
        Symptom::create([
            "id" => "s_199",
            "type" => "symptom",
            "name" => "Drinking large quantities of alcohol at one time",
            "common_name" => "Drinking large quantities of alcohol at one time",
        ]);
        Symptom::create([
            "id" => "s_200",
            "type" => "symptom",
            "name" => "Burning tongue",
            "common_name" => "Burning sensation on tongue",
        ]);
        Symptom::create([
            "id" => "s_201",
            "type" => "symptom",
            "name" => "Feeling of sand under eyelids",
            "common_name" => "Feeling of sand under eyelids",
        ]);
        Symptom::create([
            "id" => "s_202",
            "type" => "symptom",
            "name" => "Erythema migrans",
            "common_name" =>
                "Expanding red spot with regular skin or clearing in the middle",
        ]);
        Symptom::create([
            "id" => "s_203",
            "type" => "symptom",
            "name" => "Dental plaque",
            "common_name" => "Dental plaque",
        ]);
        Symptom::create([
            "id" => "s_204",
            "type" => "symptom",
            "name" => "Forward-leaning posture",
            "common_name" => "Forward-leaning posture",
        ]);
        Symptom::create([
            "id" => "s_205",
            "type" => "symptom",
            "name" => "Feeling of guilt",
            "common_name" => "Feeling of guilt",
        ]);
        Symptom::create([
            "id" => "s_206",
            "type" => "symptom",
            "name" => "Feeling of guilt or shame after drinking alcohol",
            "common_name" => "Feeling of guilt or shame after drinking alcohol",
        ]);
        Symptom::create([
            "id" => "s_207",
            "type" => "symptom",
            "name" => "Diplopia",
            "common_name" => "Double vision",
        ]);
        Symptom::create([
            "id" => "s_208",
            "type" => "symptom",
            "name" => "Decreased hearing",
            "common_name" => "Decreased hearing",
        ]);
        Symptom::create([
            "id" => "s_212",
            "type" => "symptom",
            "name" => "Miscarriage",
            "common_name" => "Miscarriage",
        ]);
        Symptom::create([
            "id" => "s_213",
            "type" => "symptom",
            "name" => "Spending a lot of time on sex-related activity",
            "common_name" => "Spending a lot of time on sex-related activity",
        ]);
        Symptom::create([
            "id" => "s_214",
            "type" => "symptom",
            "name" => "Sweating of forehead on painful side",
            "common_name" => "Sweating of forehead on painful side",
        ]);
        Symptom::create([
            "id" => "s_215",
            "type" => "symptom",
            "name" => "Frequent urination",
            "common_name" => "Frequent urination",
        ]);
        Symptom::create([
            "id" => "s_216",
            "type" => "symptom",
            "name" => "Excessive sweating",
            "common_name" => "Excessive sweating",
        ]);
        Symptom::create([
            "id" => "s_217",
            "type" => "symptom",
            "name" => "Sweating, night",
            "common_name" => "Night sweats",
        ]);
        Symptom::create([
            "id" => "s_219",
            "type" => "symptom",
            "name" => "Enlarged breasts",
            "common_name" => "Enlarged breasts",
        ]);
        Symptom::create([
            "id" => "s_220",
            "type" => "symptom",
            "name" => "Enlarged lymph nodes",
            "common_name" => "Enlarged lymph nodes",
        ]);
        Symptom::create([
            "id" => "s_221",
            "type" => "symptom",
            "name" => "Surface of lesion on genitals resembling cauliflower",
            "common_name" => "Growths on genitals resembling cauliflower",
        ]);
        Symptom::create([
            "id" => "s_223",
            "type" => "symptom",
            "name" => "Inability to stop flow of urine",
            "common_name" => "Inability to stop flow of urine",
        ]);
        Symptom::create([
            "id" => "s_225",
            "type" => "symptom",
            "name" => "Premature graying",
            "common_name" => "Premature graying",
        ]);
        Symptom::create([
            "id" => "s_226",
            "type" => "symptom",
            "name" => "Weight gain",
            "common_name" => "Weight gain",
        ]);
        Symptom::create([
            "id" => "s_227",
            "type" => "symptom",
            "name" => "Tachypnea",
            "common_name" => "Accelerated breathing",
        ]);
        Symptom::create([
            "id" => "s_228",
            "type" => "symptom",
            "name" => "Loose teeth",
            "common_name" => "Loose teeth",
        ]);
        Symptom::create([
            "id" => "s_229",
            "type" => "symptom",
            "name" => "Erythema",
            "common_name" => "Redness of skin",
        ]);
        Symptom::create([
            "id" => "s_230",
            "type" => "symptom",
            "name" => "Erythema, facial, butterfly-shaped",
            "common_name" => "Rash only on the cheeks and the nose",
        ]);
        Symptom::create([
            "id" => "s_232",
            "type" => "symptom",
            "name" => "Pain in lower limb, calf, severe while walking",
            "common_name" => "Severe calf pain while walking",
        ]);
        Symptom::create([
            "id" => "s_233",
            "type" => "symptom",
            "name" => "Toothache, severe",
            "common_name" => "Severe toothache",
        ]);
        Symptom::create([
            "id" => "s_234",
            "type" => "symptom",
            "name" => "Easy bruising",
            "common_name" => "Easy bruising",
        ]);
        Symptom::create([
            "id" => "s_235",
            "type" => "symptom",
            "name" => "Eyelid twitching",
            "common_name" => "Eyelid twitching",
        ]);
        Symptom::create([
            "id" => "s_236",
            "type" => "symptom",
            "name" => "Decreased libido",
            "common_name" => "Loss of interest in sex",
        ]);
        Symptom::create([
            "id" => "s_237",
            "type" => "symptom",
            "name" => "Weight loss without loss of appetite",
            "common_name" => "Weight loss without loss of appetite",
        ]);
        Symptom::create([
            "id" => "s_238",
            "type" => "symptom",
            "name" => "Slower gait",
            "common_name" => "Slower walk",
        ]);
        Symptom::create([
            "id" => "s_241",
            "type" => "symptom",
            "name" => "Dermatological changes",
            "common_name" => "Skin changes",
        ]);
        Symptom::create([
            "id" => "s_243",
            "type" => "symptom",
            "name" =>
                "Using methods to lose weight=> vomiting, starvation diets",
            "common_name" =>
                "Using methods to lose weight=> vomiting, starvation diets",
        ]);
        Symptom::create([
            "id" => "s_244",
            "type" => "symptom",
            "name" => "Fear of object, situation, action",
            "common_name" => "Specific fear",
        ]);
        Symptom::create([
            "id" => "s_245",
            "type" => "symptom",
            "name" => "Dermatological changes, scabs",
            "common_name" => "Scab or crust",
        ]);
        Symptom::create([
            "id" => "s_247",
            "type" => "symptom",
            "name" => "Dry mouth",
            "common_name" => "Dry mouth",
        ]);
        Symptom::create([
            "id" => "s_249",
            "type" => "symptom",
            "name" => "Itching around anus",
            "common_name" => "Itching around anus",
        ]);
        Symptom::create([
            "id" => "s_250",
            "type" => "symptom",
            "name" => "Pruritus, most intense at night",
            "common_name" => "Itching most intense at night",
        ]);
        Symptom::create([
            "id" => "s_251",
            "type" => "symptom",
            "name" =>
                "Pruritus, aggravated by change in temperature, sweating, or wearing wool",
            "common_name" =>
                "Itching aggravated by changes in temperature, sweat, or wearing wool",
        ]);
        Symptom::create([
            "id" => "s_252",
            "type" => "symptom",
            "name" => "Itchy throat or nose",
            "common_name" => "Itchy throat or nose",
        ]);
        Symptom::create([
            "id" => "s_253",
            "type" => "symptom",
            "name" => "Genital itch",
            "common_name" => "Itching in crotch",
        ]);
        Symptom::create([
            "id" => "s_254",
            "type" => "symptom",
            "name" => "Pruritus",
            "common_name" => "Itchy skin",
        ]);
        Symptom::create([
            "id" => "s_255",
            "type" => "symptom",
            "name" => "Itching in ear",
            "common_name" => "Itching in ear",
        ]);
        Symptom::create([
            "id" => "s_256",
            "type" => "symptom",
            "name" => "Trismus",
            "common_name" => "Lockjaw",
        ]);
        Symptom::create([
            "id" => "s_257",
            "type" => "symptom",
            "name" => "Stiffness of spine in the morning",
            "common_name" => "Stiffness of spine in the morning",
        ]);
        Symptom::create([
            "id" => "s_258",
            "type" => "symptom",
            "name" => "Morning stiffness of hand joints",
            "common_name" => "Morning stiffness of hand joints",
        ]);
        Symptom::create([
            "id" => "s_259",
            "type" => "symptom",
            "name" => "Spine or joint stiffness subsiding after exercise",
            "common_name" =>
                "Spine or joint stiffness subsiding after exercise",
        ]);
        Symptom::create([
            "id" => "s_261",
            "type" => "symptom",
            "name" => "Tachycardia",
            "common_name" => "Fast heartbeat",
        ]);
        Symptom::create([
            "id" => "s_263",
            "type" => "symptom",
            "name" => "Phimosis",
            "common_name" => "Difficulty retracting foreskin",
        ]);
        Symptom::create([
            "id" => "s_265",
            "type" => "symptom",
            "name" =>
                "Difficulty refraining from smoking cigarettes where not permitted",
            "common_name" =>
                "Difficulty refraining from smoking cigarettes where not permitted",
        ]);
        Symptom::create([
            "id" => "s_266",
            "type" => "symptom",
            "name" => "Difficulty biting and chewing",
            "common_name" => "Difficulty biting and chewing",
        ]);
        Symptom::create([
            "id" => "s_267",
            "type" => "symptom",
            "name" => "Difficulty determining which tooth hurts",
            "common_name" => "Difficulty identifying which tooth hurts",
        ]);
        Symptom::create([
            "id" => "s_269",
            "type" => "symptom",
            "name" => "Difficulty acquiring new information",
            "common_name" => "Difficulty learning new things",
        ]);
        Symptom::create([
            "id" => "s_270",
            "type" => "symptom",
            "name" => "Creaking joints during movement",
            "common_name" => "Creaking joints during movement",
        ]);
        Symptom::create([
            "id" => "s_271",
            "type" => "symptom",
            "name" => "Smooth face without wrinkles",
            "common_name" => "Smooth face without wrinkles",
        ]);
        Symptom::create([
            "id" => "s_272",
            "type" => "symptom",
            "name" => "Enamel lesions, caries",
            "common_name" => "Cavities",
        ]);
        Symptom::create([
            "id" => "s_273",
            "type" => "symptom",
            "name" => "Heavy legs at the end of the day",
            "common_name" => "Heavy legs at the end of the day",
        ]);
        Symptom::create([
            "id" => "s_274",
            "type" => "symptom",
            "name" => "Feeling hot",
            "common_name" => "Feeling hot",
        ]);
        Symptom::create([
            "id" => "s_276",
            "type" => "symptom",
            "name" => "Clogged ear",
            "common_name" => "Clogged ear",
        ]);
        Symptom::create([
            "id" => "s_277",
            "type" => "symptom",
            "name" => "Increased abdominal girth",
            "common_name" => "Increased abdominal size",
        ]);
        Symptom::create([
            "id" => "s_279",
            "type" => "symptom",
            "name" => "Feeling pressure or pulsation inside the tooth",
            "common_name" => "Feeling pressure or pulsation inside the tooth",
        ]);
        Symptom::create([
            "id" => "s_280",
            "type" => "symptom",
            "name" => "Hot flashes",
            "common_name" => "Hot flashes",
        ]);
        Symptom::create([
            "id" => "s_281",
            "type" => "symptom",
            "name" =>
                "Physical injury, to self or others, after drinking alcohol",
            "common_name" =>
                "Physical injury, to self or others, after drinking alcohol",
        ]);
        Symptom::create([
            "id" => "s_284",
            "type" => "symptom",
            "name" => "Diminished appetite",
            "common_name" => "Diminished appetite",
        ]);
        Symptom::create([
            "id" => "s_285",
            "type" => "symptom",
            "name" => "Weight loss",
            "common_name" => "Weight loss",
        ]);
        Symptom::create([
            "id" => "s_287",
            "type" => "symptom",
            "name" =>
                "Loss of interest in activities previously enjoyed, lasting at least two weeks",
            "common_name" => "Loss of interest",
        ]);
        Symptom::create([
            "id" => "s_288",
            "type" => "symptom",
            "name" => "Close family or friends pointing out excessive drinking",
            "common_name" =>
                "Close family or friends pointing out excessive drinking",
        ]);
        Symptom::create([
            "id" => "s_289",
            "type" => "symptom",
            "name" => "Malocclusions",
            "common_name" => "Malocclusions",
        ]);
        Symptom::create([
            "id" => "s_290",
            "type" => "symptom",
            "name" =>
                "Visible and palpable enlarged vein of limb, chest or abdomen",
            "common_name" =>
                "Visible and palpable enlarged vein of limb, chest or abdomen",
        ]);
        Symptom::create([
            "id" => "s_291",
            "type" => "symptom",
            "name" => "Ear canal swelling",
            "common_name" => "Swelling inside the ear",
        ]);
        Symptom::create([
            "id" => "s_297",
            "type" => "symptom",
            "name" => "Discharge from ear",
            "common_name" => "Discharge from ear",
        ]);
        Symptom::create([
            "id" => "s_299",
            "type" => "symptom",
            "name" => "Abdominal mass",
            "common_name" => "Lump in stomach",
        ]);
        Symptom::create([
            "id" => "s_300",
            "type" => "symptom",
            "name" => "Nodule located in breast",
            "common_name" => "Lump in the breast",
        ]);
        Symptom::create([
            "id" => "s_301",
            "type" => "symptom",
            "name" => "Discharge under foreskin",
            "common_name" => "Discharge under foreskin",
        ]);
        Symptom::create([
            "id" => "s_302",
            "type" => "symptom",
            "name" => "Discharge from periodontal pockets",
            "common_name" => "Discharge from spaces between the gums and teeth",
        ]);
        Symptom::create([
            "id" => "s_303",
            "type" => "symptom",
            "name" => "Compulsive behavior",
            "common_name" =>
                "Performing certain actions repeatedly to ease anxiety",
        ]);
        Symptom::create([
            "id" => "s_305",
            "type" => "symptom",
            "name" => "Vomiting",
            "common_name" => "Vomiting",
        ]);
        Symptom::create([
            "id" => "s_306",
            "type" => "symptom",
            "name" => "Hematemesis",
            "common_name" => "Vomiting blood",
        ]);
        Symptom::create([
            "id" => "s_308",
            "type" => "symptom",
            "name" => "Smoking most cigarettes in the morning",
            "common_name" => "Smoking most cigarettes in the morning",
        ]);
        Symptom::create([
            "id" => "s_309",
            "type" => "symptom",
            "name" => "Bloating",
            "common_name" => "Bloating",
        ]);
        Symptom::create([
            "id" => "s_310",
            "type" => "symptom",
            "name" => "Increased thirst",
            "common_name" => "Increased thirst",
        ]);
        Symptom::create([
            "id" => "s_311",
            "type" => "symptom",
            "name" => "Increased appetite",
            "common_name" => "Increased appetite",
        ]);
        Symptom::create([
            "id" => "s_313",
            "type" => "symptom",
            "name" => "Sensory loss in one limb",
            "common_name" => "Loss of feeling in only one arm or leg",
        ]);
        Symptom::create([
            "id" => "s_316",
            "type" => "symptom",
            "name" => "Impaired memory",
            "common_name" => "Impaired memory",
        ]);
        Symptom::create([
            "id" => "s_317",
            "type" => "symptom",
            "name" => "Impaired balance while walking",
            "common_name" => "Stumbling or losing balance while walking",
        ]);
        Symptom::create([
            "id" => "s_319",
            "type" => "symptom",
            "name" => "Sleep disorder",
            "common_name" => "Sleep disorder",
        ]);
        Symptom::create([
            "id" => "s_320",
            "type" => "symptom",
            "name" => "Impaired vision",
            "common_name" => "Impaired vision",
        ]);
        Symptom::create([
            "id" => "s_322",
            "type" => "symptom",
            "name" => "Gum erythema",
            "common_name" => "Red gums",
        ]);
        Symptom::create([
            "id" => "s_323",
            "type" => "symptom",
            "name" => "Erythema of skin overlying a joint",
            "common_name" => "Joint redness",
        ]);
        Symptom::create([
            "id" => "s_325",
            "type" => "symptom",
            "name" => "Erythema, limb",
            "common_name" => "Red skin on arm or leg",
        ]);
        Symptom::create([
            "id" => "s_326",
            "type" => "symptom",
            "name" =>
                "Neglecting obligations such as work, study, or family to pursue sex or think about sex",
            "common_name" => "Neglecting duties and activities to pursue sex",
        ]);
        Symptom::create([
            "id" => "s_327",
            "type" => "symptom",
            "name" => "Need to smoke cigarette when waking up",
            "common_name" => "Need to smoke cigarette when waking up",
        ]);
        Symptom::create([
            "id" => "s_328",
            "type" => "symptom",
            "name" => "Abnormal vaginal discharge",
            "common_name" => "Abnormal vaginal discharge",
        ]);
        Symptom::create([
            "id" => "s_329",
            "type" => "symptom",
            "name" => "Constipation",
            "common_name" => "Constipation",
        ]);
        Symptom::create([
            "id" => "s_330",
            "type" => "symptom",
            "name" => "Regurgitation",
            "common_name" => "Food coming back up into the mouth",
        ]);
        Symptom::create([
            "id" => "s_331",
            "type" => "symptom",
            "name" => "Nasal congestion",
            "common_name" => "Stuffed nose",
        ]);
        Symptom::create([
            "id" => "s_332",
            "type" => "symptom",
            "name" => "Jaundice",
            "common_name" => "Yellowed skin",
        ]);
        Symptom::create([
            "id" => "s_334",
            "type" => "symptom",
            "name" => "Jaundice during increased stress",
            "common_name" => "Yellowed skin during times of increased stress",
        ]);
        Symptom::create([
            "id" => "s_335",
            "type" => "symptom",
            "name" => "Jaundice following intense physical exertion",
            "common_name" => "Yellowed skin after physical activity",
        ]);
        Symptom::create([
            "id" => "s_336",
            "type" => "symptom",
            "name" => "Jaundice during infectious disease",
            "common_name" =>
                "Yellowed skin while suffering from an infectious disease",
        ]);
        Symptom::create([
            "id" => "s_338",
            "type" => "symptom",
            "name" => "Heartburn",
            "common_name" => "Heartburn",
        ]);
        Symptom::create([
            "id" => "s_339",
            "type" => "symptom",
            "name" => "Toothache, reduced after cold foods or drinks",
            "common_name" => "Cold foods or drinks ease toothache",
        ]);
        Symptom::create([
            "id" => "s_341",
            "type" => "symptom",
            "name" =>
                "Illusion of surroundings being bigger or smaller than they actually are",
            "common_name" =>
                "Illusion of surroundings being bigger or smaller than they actually are",
        ]);
        Symptom::create([
            "id" => "s_342",
            "type" => "symptom",
            "name" => "Wrinkling or dimpling of skin on breast",
            "common_name" => "Wrinkling or dimpling of skin on breast",
        ]);
        Symptom::create([
            "id" => "s_343",
            "type" => "symptom",
            "name" => "Retraction or indentation of nipple",
            "common_name" => "Change in the nipple",
        ]);
        Symptom::create([
            "id" => "s_345",
            "type" => "symptom",
            "name" => "Change in handwriting",
            "common_name" => "Change in handwriting",
        ]);
        Symptom::create([
            "id" => "s_346",
            "type" => "symptom",
            "name" => "Change in colour of a tooth",
            "common_name" => "Change in colour of a tooth",
        ]);
        Symptom::create([
            "id" => "s_348",
            "type" => "symptom",
            "name" => "Behavioural changes, personality",
            "common_name" => "Change in personality",
        ]);
        Symptom::create([
            "id" => "s_350",
            "type" => "symptom",
            "name" => "Dermatological changes, forming a line",
            "common_name" => "Skin changes forming a line",
        ]);
        Symptom::create([
            "id" => "s_351",
            "type" => "symptom",
            "name" => "Ulcerations or abscesses near the anus",
            "common_name" => "Ulcerations or abscesses near the anus",
        ]);
        Symptom::create([
            "id" => "s_352",
            "type" => "symptom",
            "name" =>
                "Dermatological changes, in direct contact with buttons, fasteners, or cosmetics",
            "common_name" =>
                "Skin changes in direct contact with buttons, fasteners, jewelry, or cosmetics",
        ]);
        Symptom::create([
            "id" => "s_358",
            "type" => "symptom",
            "name" => "Intermittent urine flow",
            "common_name" => "Intermittent urine flow",
        ]);
        Symptom::create([
            "id" => "s_359",
            "type" => "symptom",
            "name" => "Joint deformation, non-traumatic",
            "common_name" =>
                "Joint deformation not associated with recent trauma",
        ]);
        Symptom::create([
            "id" => "s_360",
            "type" => "symptom",
            "name" => "Microstomia",
            "common_name" => "Narrow mouth, difficulty opening mouth",
        ]);
        Symptom::create([
            "id" => "s_361",
            "type" => "symptom",
            "name" =>
                "Increase in sexual experiences or sensations needed to attain desired effect",
            "common_name" =>
                "Increase in sexual experiences or sensations needed to attain desired effect",
        ]);
        Symptom::create([
            "id" => "s_362",
            "type" => "symptom",
            "name" => "Oily skin",
            "common_name" => "Oily skin",
        ]);
        Symptom::create([
            "id" => "s_363",
            "type" => "symptom",
            "name" => "Edema, neck",
            "common_name" => "Swollen neck",
        ]);
        Symptom::create([
            "id" => "s_369",
            "type" => "symptom",
            "name" => "Discharge from urethra",
            "common_name" => "Discharge from urethra",
        ]);
        Symptom::create([
            "id" => "s_370",
            "type" => "symptom",
            "name" => "Dizziness",
            "common_name" => "Dizzy",
        ]);
        Symptom::create([
            "id" => "s_371",
            "type" => "symptom",
            "name" => "Overwork",
            "common_name" => "Working too much",
        ]);
        Symptom::create([
            "id" => "s_373",
            "type" => "symptom",
            "name" => "Honey-coloured crust on the skin",
            "common_name" => "Honey-coloured scabs on the skin",
        ]);
        Symptom::create([
            "id" => "s_376",
            "type" => "symptom",
            "name" => "Skin phototype I or II",
            "common_name" => "Light or fair skin that easily burns",
        ]);
        Symptom::create([
            "id" => "s_377",
            "type" => "symptom",
            "name" => "Numerous nevi",
            "common_name" => "Many birthmarks",
        ]);
        Symptom::create([
            "id" => "s_380",
            "type" => "symptom",
            "name" => "Asymmetry of a skin mole or birthmark",
            "common_name" => "Asymmetry of a skin mole or birthmark",
        ]);
        Symptom::create([
            "id" => "s_381",
            "type" => "symptom",
            "name" => "Skin mole or birthmark with irregular border",
            "common_name" => "Skin mole or birthmark with irregular border",
        ]);
        Symptom::create([
            "id" => "s_382",
            "type" => "symptom",
            "name" => "Mole or birthmark with diameter greater than 6 mm",
            "common_name" =>
                "Mole or birthmark with diameter greater than 6 mm",
        ]);
        Symptom::create([
            "id" => "s_383",
            "type" => "symptom",
            "name" => "Suspicious mole or birthmark",
            "common_name" => "Suspicious mole or birthmark on the skin",
        ]);
        Symptom::create([
            "id" => "s_384",
            "type" => "symptom",
            "name" => "Red macules with silver-white, flaky scales",
            "common_name" => "Red skin patches with silver-white, flaky scales",
        ]);
        Symptom::create([
            "id" => "s_385",
            "type" => "symptom",
            "name" => "Dry, cracked skin, bleeding occasionally",
            "common_name" => "Dry, cracked skin, bleeding occasionally",
        ]);
        Symptom::create([
            "id" => "s_386",
            "type" => "symptom",
            "name" => "Thickened nails with pits or grooves",
            "common_name" => "Thickened nails with pits or grooves",
        ]);
        Symptom::create([
            "id" => "s_388",
            "type" => "symptom",
            "name" => "Pustule",
            "common_name" => "Vesicles filled with pus, up to 1 cm in diameter",
        ]);
        Symptom::create([
            "id" => "s_389",
            "type" => "symptom",
            "name" => "Open comedones",
            "common_name" => "Blackheads",
        ]);
        Symptom::create([
            "id" => "s_390",
            "type" => "symptom",
            "name" =>
                "Dermatological changes, localization near sebaceous glands",
            "common_name" => "Skin changes on oily areas of body",
        ]);
        Symptom::create([
            "id" => "s_393",
            "type" => "symptom",
            "name" => "Urticaria",
            "common_name" => "Hives",
        ]);
        Symptom::create([
            "id" => "s_398",
            "type" => "symptom",
            "name" => "Dermatological changes, entire body",
            "common_name" => "Skin changes all over the body",
        ]);
        Symptom::create([
            "id" => "s_400",
            "type" => "symptom",
            "name" => "Dermatological changes, preceded by pain or itching",
            "common_name" => "Skin changes preceded by pain or itching",
        ]);
        Symptom::create([
            "id" => "s_402",
            "type" => "symptom",
            "name" =>
                "Dermatological changes, recurring during infections or menstrual period",
            "common_name" =>
                "Skin changes recurring during period or infections",
        ]);
        Symptom::create([
            "id" => "s_404",
            "type" => "symptom",
            "name" => "Dermatological changes, rough and irregular surface",
            "common_name" => "Skin changes with rough, irregular surface",
        ]);
        Symptom::create([
            "id" => "s_407",
            "type" => "symptom",
            "name" => "Tinnitus",
            "common_name" => "Ringing in ears",
        ]);
        Symptom::create([
            "id" => "s_408",
            "type" => "symptom",
            "name" => "Cold feet and toes",
            "common_name" => "Cold feet and toes",
        ]);
        Symptom::create([
            "id" => "s_410",
            "type" => "symptom",
            "name" => "Reduced body temperature",
            "common_name" => "Reduced body temperature",
        ]);
        Symptom::create([
            "id" => "s_412",
            "type" => "symptom",
            "name" => "Diarrhea, foamy",
            "common_name" => "Foamy diarrhea",
        ]);
        Symptom::create([
            "id" => "s_415",
            "type" => "symptom",
            "name" => "Menstrual period more than 3 weeks late",
            "common_name" => "Period more than 3 weeks late",
        ]);
        Symptom::create([
            "id" => "s_418",
            "type" => "symptom",
            "name" => "Stiff neck",
            "common_name" => "Stiff neck",
        ]);
        Symptom::create([
            "id" => "s_419",
            "type" => "symptom",
            "name" => "Feeling overweight despite normal to low weight",
            "common_name" => "Feeling overweight despite normal to low weight",
        ]);
        Symptom::create([
            "id" => "s_420",
            "type" => "symptom",
            "name" => "Lying about eating, hiding food",
            "common_name" => "Lying about eating, hiding food",
        ]);
        Symptom::create([
            "id" => "s_421",
            "type" => "symptom",
            "name" => "Increased libido",
            "common_name" => "Increased libido",
        ]);
        Symptom::create([
            "id" => "s_422",
            "type" => "symptom",
            "name" => "Deepening of voice",
            "common_name" => "Deepened voice",
        ]);
        Symptom::create([
            "id" => "s_423",
            "type" => "symptom",
            "name" => "Sense of self-worth dependent on weight",
            "common_name" => "Sense of self-worth dependent on weight",
        ]);
        Symptom::create([
            "id" => "s_424",
            "type" => "symptom",
            "name" => "Facial pain, unilateral",
            "common_name" => "Face pain on one side",
        ]);
        Symptom::create([
            "id" => "s_425",
            "type" => "symptom",
            "name" => "Facial pain, stabbing",
            "common_name" => "Stabbing face pain",
        ]);
        Symptom::create([
            "id" => "s_426",
            "type" => "symptom",
            "name" =>
                "Facial pain, triggered by eating, or touching or brushing teeth",
            "common_name" =>
                "Face pain triggered by eating, or touching or brushing teeth",
        ]);
        Symptom::create([
            "id" => "s_427",
            "type" => "symptom",
            "name" => "Facial pain, periodic",
            "common_name" => "Periodic face pain",
        ]);
        Symptom::create([
            "id" => "s_429",
            "type" => "symptom",
            "name" =>
                "Clicking or cracking sounds in the jaw joint when opening or closing the mouth",
            "common_name" =>
                "Clicking or cracking sounds in the jaw joint when opening or closing the mouth",
        ]);
        Symptom::create([
            "id" => "s_430",
            "type" => "symptom",
            "name" => "Pain in temporomandibular joint during movement",
            "common_name" => "Pain in jaw during movement",
        ]);
        Symptom::create([
            "id" => "s_432",
            "type" => "symptom",
            "name" => "Drooping mouth corner",
            "common_name" => "Drooping mouth corner",
        ]);
        Symptom::create([
            "id" => "s_433",
            "type" => "symptom",
            "name" => "Erythema, foreskin or head of the penis",
            "common_name" => "Reddened foreskin or head of the penis",
        ]);
        Symptom::create([
            "id" => "s_435",
            "type" => "symptom",
            "name" => "Feeling of incomplete evacuation of the bladder",
            "common_name" => "Bladder not emptying completely",
        ]);
        Symptom::create([
            "id" => "s_436",
            "type" => "symptom",
            "name" => "Anorectal pain",
            "common_name" => "Anorectal pain",
        ]);
        Symptom::create([
            "id" => "s_437",
            "type" => "symptom",
            "name" => "Cyanosis",
            "common_name" => "Bluish-gray coloured skin",
        ]);
        Symptom::create([
            "id" => "s_471",
            "type" => "symptom",
            "name" =>
                "Abdominal pain, radiating to right shoulder or shoulder blade",
            "common_name" =>
                "Stomach pain spreading to the right shoulder area",
        ]);
        Symptom::create([
            "id" => "s_474",
            "type" => "symptom",
            "name" => "Wheezing, audible",
            "common_name" => "Whistling sound made while breathing",
        ]);
        Symptom::create([
            "id" => "s_476",
            "type" => "symptom",
            "name" => "Pain increases when touching ear area",
            "common_name" => "Pain increases when touching ear area",
        ]);
        Symptom::create([
            "id" => "s_477",
            "type" => "symptom",
            "name" => "Aphonia",
            "common_name" => "Loss of voice",
        ]);
        Symptom::create([
            "id" => "s_478",
            "type" => "symptom",
            "name" => "Facial pain",
            "common_name" => "Face pain",
        ]);
        Symptom::create([
            "id" => "s_479",
            "type" => "symptom",
            "name" => "Nystagmus",
            "common_name" => "Nystagmus",
        ]);
        Symptom::create([
            "id" => "s_480",
            "type" => "symptom",
            "name" => "Enlargement of hands, feet, or face",
            "common_name" => "Enlargement of hands, feet, or face",
        ]);
        Symptom::create([
            "id" => "s_483",
            "type" => "symptom",
            "name" => "Dermatological changes, eyelid",
            "common_name" => "Skin changes on eyelid",
        ]);
        Symptom::create([
            "id" => "s_484",
            "type" => "symptom",
            "name" => "Eyelid lesion, red lump with yellow tip",
            "common_name" => "Red lump with yellow tip on eyelid",
        ]);
        Symptom::create([
            "id" => "s_485",
            "type" => "symptom",
            "name" => "Eyelid lesion, painful",
            "common_name" => "Painful skin changes on eyelid",
        ]);
        Symptom::create([
            "id" => "s_486",
            "type" => "symptom",
            "name" => "Eyelid lesion, red and warm",
            "common_name" => "Red and warm skin changes on eyelid",
        ]);
        Symptom::create([
            "id" => "s_488",
            "type" => "symptom",
            "name" => "Eyes sensitive to light",
            "common_name" => "Light sensitivity",
        ]);
        Symptom::create([
            "id" => "s_489",
            "type" => "symptom",
            "name" => "Dry discharge on eyelids",
            "common_name" => "Dry discharge on eyelids",
        ]);
        Symptom::create([
            "id" => "s_492",
            "type" => "symptom",
            "name" => "Red eye",
            "common_name" => "Bloodshot eye",
        ]);
        Symptom::create([
            "id" => "s_493",
            "type" => "symptom",
            "name" => "Eye pain",
            "common_name" => "Eye pain",
        ]);
        Symptom::create([
            "id" => "s_494",
            "type" => "symptom",
            "name" => "Visual field narrowing",
            "common_name" => "Tunnel Vision",
        ]);
        Symptom::create([
            "id" => "s_497",
            "type" => "symptom",
            "name" => "Anisocoria",
            "common_name" => "Asymmetric pupils",
        ]);
        Symptom::create([
            "id" => "s_501",
            "type" => "symptom",
            "name" => "Distance misjudgment",
            "common_name" => "Problems judging distances",
        ]);
        Symptom::create([
            "id" => "s_503",
            "type" => "symptom",
            "name" => "Muscle cramps",
            "common_name" => "Muscle cramps",
        ]);
        Symptom::create([
            "id" => "s_504",
            "type" => "symptom",
            "name" => "Foamy urine",
            "common_name" => "Foamy urine",
        ]);
        Symptom::create([
            "id" => "s_505",
            "type" => "symptom",
            "name" => "Frequent infections",
            "common_name" => "Frequent infections",
        ]);
        Symptom::create([
            "id" => "s_506",
            "type" => "symptom",
            "name" => "Insect bite",
            "common_name" => "Insect bite",
        ]);
        Symptom::create([
            "id" => "s_507",
            "type" => "symptom",
            "name" => "Lost will to live",
            "common_name" => "Lost will to live",
        ]);
        Symptom::create([
            "id" => "s_508",
            "type" => "symptom",
            "name" => "Anhedonia",
            "common_name" => "Inability to enjoy life",
        ]);
        Symptom::create([
            "id" => "s_509",
            "type" => "symptom",
            "name" => "Odynophagia",
            "common_name" => "Painful swallowing",
        ]);
        Symptom::create([
            "id" => "s_510",
            "type" => "symptom",
            "name" => "Urethral discharge when pressing the penis",
            "common_name" => "Discharge when pressing penis",
        ]);
        Symptom::create([
            "id" => "s_513",
            "type" => "symptom",
            "name" => "Globus sensation",
            "common_name" => "Feeling of lump in throat",
        ]);
        Symptom::create([
            "id" => "s_514",
            "type" => "symptom",
            "name" => "Derealization",
            "common_name" => "Feeling detached from one's surroundings",
        ]);
        Symptom::create([
            "id" => "s_516",
            "type" => "symptom",
            "name" => "Fear of dying",
            "common_name" => "Fear of dying",
        ]);
        Symptom::create([
            "id" => "s_518",
            "type" => "symptom",
            "name" => "Paresthesia",
            "common_name" => "Body tingling",
        ]);
        Symptom::create([
            "id" => "s_524",
            "type" => "symptom",
            "name" => "Nasal polyps",
            "common_name" => "Polyps in nose",
        ]);
        Symptom::create([
            "id" => "s_525",
            "type" => "symptom",
            "name" => "Foul-smelling stools",
            "common_name" => "Foul-smelling stools",
        ]);
        Symptom::create([
            "id" => "s_526",
            "type" => "symptom",
            "name" => "Cough, productive with yellow or green sputum",
            "common_name" => "Coughing up thick, yellow or green phlegm",
        ]);
        Symptom::create([
            "id" => "s_528",
            "type" => "symptom",
            "name" => "Recent alcohol consumption",
            "common_name" => "Recent alcohol consumption",
        ]);
        Symptom::create([
            "id" => "s_529",
            "type" => "symptom",
            "name" => "Parotid swelling",
            "common_name" => "Parotid swelling",
        ]);
        Symptom::create([
            "id" => "s_530",
            "type" => "symptom",
            "name" => "Sudden increase in blood pressure",
            "common_name" => "Sudden increase in blood pressure",
        ]);
        Symptom::create([
            "id" => "s_531",
            "type" => "symptom",
            "name" => "Frequent infections, upper respiratory tract",
            "common_name" => "Frequent runny nose, cough",
        ]);
        Symptom::create([
            "id" => "s_532",
            "type" => "symptom",
            "name" => "Frequent infections, lower respiratory tract",
            "common_name" => "Frequent bronchitis",
        ]);
        Symptom::create([
            "id" => "s_533",
            "type" => "symptom",
            "name" => "Hypotension",
            "common_name" => "Low blood pressure",
        ]);
        Symptom::create([
            "id" => "s_534",
            "type" => "symptom",
            "name" => "Bradycardia",
            "common_name" => "Slow heart rate",
        ]);
        Symptom::create([
            "id" => "s_535",
            "type" => "symptom",
            "name" => "Decreased pupillary light reflex",
            "common_name" => "Decreased pupillary light reflex",
        ]);
        Symptom::create([
            "id" => "s_536",
            "type" => "symptom",
            "name" => "Mydriasis",
            "common_name" => "Dilated pupils",
        ]);
        Symptom::create([
            "id" => "s_537",
            "type" => "symptom",
            "name" => "Miosis",
            "common_name" => "Constriction of the pupil",
        ]);
        Symptom::create([
            "id" => "s_538",
            "type" => "symptom",
            "name" => "Tremors",
            "common_name" => "Muscles trembling",
        ]);
        Symptom::create([
            "id" => "s_539",
            "type" => "symptom",
            "name" => "Seizures without loss of consciousness",
            "common_name" => "Seizures without loss of consciousness",
        ]);
        Symptom::create([
            "id" => "s_540",
            "type" => "symptom",
            "name" => "Irritability",
            "common_name" => "Irritability",
        ]);
        Symptom::create([
            "id" => "s_541",
            "type" => "symptom",
            "name" => "Orthostatic hypotension",
            "common_name" => "Feeling dizzy or faint after standing up quickly",
        ]);
        Symptom::create([
            "id" => "s_542",
            "type" => "symptom",
            "name" => "Dry skin",
            "common_name" => "Dry skin",
        ]);
        Symptom::create([
            "id" => "s_543",
            "type" => "symptom",
            "name" => "Elevated blood pressure",
            "common_name" => "High blood pressure",
        ]);
        Symptom::create([
            "id" => "s_545",
            "type" => "symptom",
            "name" => "Telangiectasias",
            "common_name" => "Spider veins",
        ]);
        Symptom::create([
            "id" => "s_547",
            "type" => "symptom",
            "name" => "Galactorrhea in women",
            "common_name" =>
                "Milky discharge from the nipple outside of breastfeeding period",
        ]);
        Symptom::create([
            "id" => "s_550",
            "type" => "symptom",
            "name" => "Lens clouding",
            "common_name" => "Cloudy eyes",
        ]);
        Symptom::create([
            "id" => "s_551",
            "type" => "symptom",
            "name" => "Toothache",
            "common_name" => "Toothache",
        ]);
        Symptom::create([
            "id" => "s_553",
            "type" => "symptom",
            "name" => "Cyanosis, fingers",
            "common_name" => "Grayish-blue fingers",
        ]);
        Symptom::create([
            "id" => "s_554",
            "type" => "symptom",
            "name" => "Pain in fingers or hand",
            "common_name" => "Pain in fingers or hand",
        ]);
        Symptom::create([
            "id" => "s_555",
            "type" => "symptom",
            "name" => "Tingling fingers",
            "common_name" => "Tingling fingers",
        ]);
        Symptom::create([
            "id" => "s_556",
            "type" => "symptom",
            "name" => "Cold hands or fingers",
            "common_name" => "Cold hands or fingers",
        ]);
        Symptom::create([
            "id" => "s_557",
            "type" => "symptom",
            "name" => "Erythema, hand",
            "common_name" => "Red hand",
        ]);
        Symptom::create([
            "id" => "s_558",
            "type" => "symptom",
            "name" => "Symptoms exacerbated by low temperature",
            "common_name" => "Symptoms worse in the cold",
        ]);
        Symptom::create([
            "id" => "s_561",
            "type" => "symptom",
            "name" => "Belching",
            "common_name" => "Burping",
        ]);
        Symptom::create([
            "id" => "s_562",
            "type" => "symptom",
            "name" => "Edema, pitting",
            "common_name" => "Pitting edema",
        ]);
        Symptom::create([
            "id" => "s_563",
            "type" => "symptom",
            "name" => "Dyspnea, orthopnea",
            "common_name" => "Shortness of breath when lying down",
        ]);
        Symptom::create([
            "id" => "s_564",
            "type" => "symptom",
            "name" => "Loss of muscle mass, hands",
            "common_name" => "Loss of muscles in hands",
        ]);
        Symptom::create([
            "id" => "s_567",
            "type" => "symptom",
            "name" => "Murphy's sign",
            "common_name" =>
                "Stomach pain on deep inhalation and simultaneous pressing right upper part of abdomen",
        ]);
        Symptom::create([
            "id" => "s_568",
            "type" => "symptom",
            "name" => "Self-disgust after binge eating",
            "common_name" => "Self-disgust after binge eating",
        ]);
        Symptom::create([
            "id" => "s_569",
            "type" => "symptom",
            "name" => "Pale or clay-coloured stools",
            "common_name" => "Pale or clay-coloured stools",
        ]);
        Symptom::create([
            "id" => "s_570",
            "type" => "symptom",
            "name" => "Hypopyon",
            "common_name" => "Collection of pus in front of the eye",
        ]);
        Symptom::create([
            "id" => "s_571",
            "type" => "symptom",
            "name" => "Spasticity",
            "common_name" => "Increased muscle tension",
        ]);
        Symptom::create([
            "id" => "s_572",
            "type" => "symptom",
            "name" => "Reduced degree of facial expression",
            "common_name" => "Face lacking expression or animation",
        ]);
        Symptom::create([
            "id" => "s_575",
            "type" => "symptom",
            "name" => "Joint stiffness",
            "common_name" => "Stiff joints",
        ]);
        Symptom::create([
            "id" => "s_576",
            "type" => "symptom",
            "name" => "Joint pain, aggravated during cold, damp weather",
            "common_name" => "Joint pain, aggravated during cold, damp weather",
        ]);
        Symptom::create([
            "id" => "s_578",
            "type" => "symptom",
            "name" => "Pain in one foot",
            "common_name" => "Foot pain",
        ]);
        Symptom::create([
            "id" => "s_579",
            "type" => "symptom",
            "name" => "Pain in lower limb",
            "common_name" => "Pain in lower limb",
        ]);
        Symptom::create([
            "id" => "s_580",
            "type" => "symptom",
            "name" => "Pain in upper limb",
            "common_name" => "Pain in upper limb",
        ]);
        Symptom::create([
            "id" => "s_581",
            "type" => "symptom",
            "name" => "Joint pain, knee",
            "common_name" => "Knee pain",
        ]);
        Symptom::create([
            "id" => "s_582",
            "type" => "symptom",
            "name" => "Anxiety attack",
            "common_name" => "Anxiety attack",
        ]);
        Symptom::create([
            "id" => "s_583",
            "type" => "symptom",
            "name" => "General anxiety",
            "common_name" => "General anxiety",
        ]);
        Symptom::create([
            "id" => "s_584",
            "type" => "symptom",
            "name" => "Change in shape of a skin mole or birthmark",
            "common_name" => "Change in shape of a skin mole or birthmark",
        ]);
        Symptom::create([
            "id" => "s_585",
            "type" => "symptom",
            "name" => "Change in colour of a skin mole or birthmark",
            "common_name" => "Change in colour of a skin mole or birthmark",
        ]);
        Symptom::create([
            "id" => "s_586",
            "type" => "symptom",
            "name" => "Gynecomastia",
            "common_name" => "Breast enlargement in man",
        ]);
        Symptom::create([
            "id" => "s_588",
            "type" => "symptom",
            "name" => "Alcohol tolerance",
            "common_name" => "Need of higher alcohol quantities to get drunk",
        ]);
        Symptom::create([
            "id" => "s_589",
            "type" => "symptom",
            "name" => "Ceasing or limiting alcohol consumption",
            "common_name" => "Ceasing or limiting alcohol consumption",
        ]);
        Symptom::create([
            "id" => "s_590",
            "type" => "symptom",
            "name" => "Tremors, tongue",
            "common_name" => "Trembling of tongue",
        ]);
        Symptom::create([
            "id" => "s_591",
            "type" => "symptom",
            "name" => "Eyelid tremors",
            "common_name" => "Trembling eyelids",
        ]);
        Symptom::create([
            "id" => "s_593",
            "type" => "symptom",
            "name" => "Prolonged bleeding time",
            "common_name" => "Prolonged bleeding time",
        ]);
        Symptom::create([
            "id" => "s_594",
            "type" => "symptom",
            "name" => "Petechiae",
            "common_name" =>
                "Small red spots on the skin, not fading under pressure",
        ]);
        Symptom::create([
            "id" => "s_598",
            "type" => "symptom",
            "name" => "Abscess",
            "common_name" => "Reddened, swollen and painful skin change",
        ]);
        Symptom::create([
            "id" => "s_603",
            "type" => "symptom",
            "name" => "Nail clubbing",
            "common_name" => "Enlarged finger tips",
        ]);
        Symptom::create([
            "id" => "s_604",
            "type" => "symptom",
            "name" => "Headache, lancinating",
            "common_name" => "Stabbing headache",
        ]);
        Symptom::create([
            "id" => "s_605",
            "type" => "symptom",
            "name" => "Headache, series over a period of time",
            "common_name" => "Series of headaches",
        ]);
        Symptom::create([
            "id" => "s_606",
            "type" => "symptom",
            "name" => "Eye flashes",
            "common_name" => "Eye flashes",
        ]);
        Symptom::create([
            "id" => "s_607",
            "type" => "symptom",
            "name" => "Tongue erythema",
            "common_name" => "Unusually red tongue",
        ]);
        Symptom::create([
            "id" => "s_608",
            "type" => "symptom",
            "name" => "Angular cheilitis",
            "common_name" => "Cracked corners of lips",
        ]);
        Symptom::create([
            "id" => "s_609",
            "type" => "symptom",
            "name" => "Breast pain or tenderness, unilateral",
            "common_name" => "Pain in only one breast when pressed",
        ]);
        Symptom::create([
            "id" => "s_610",
            "type" => "symptom",
            "name" => "Coated tonsils",
            "common_name" => "White spots on tonsils",
        ]);
        Symptom::create([
            "id" => "s_611",
            "type" => "symptom",
            "name" => "Dark urine",
            "common_name" => "Dark urine",
        ]);
        Symptom::create([
            "id" => "s_612",
            "type" => "symptom",
            "name" => "Bone pain",
            "common_name" => "Bone pain",
        ]);
        Symptom::create([
            "id" => "s_613",
            "type" => "symptom",
            "name" => "Xanthelasma",
            "common_name" => "Yellow skin lesions on eyelids",
        ]);
        Symptom::create([
            "id" => "s_614",
            "type" => "symptom",
            "name" => "Itching after a hot shower or bath",
            "common_name" => "Itching after a hot shower or bath",
        ]);
        Symptom::create([
            "id" => "s_616",
            "type" => "symptom",
            "name" => "Edema, face",
            "common_name" => "Swollen face",
        ]);
        Symptom::create([
            "id" => "s_618",
            "type" => "symptom",
            "name" => "Hairy leukoplakia",
            "common_name" => "Hairy leukoplakia",
        ]);
        Symptom::create([
            "id" => "s_619",
            "type" => "symptom",
            "name" => "Impaired memory, finding objects of everyday use",
            "common_name" => "Difficulty finding everyday objects",
        ]);
        Symptom::create([
            "id" => "s_622",
            "type" => "symptom",
            "name" => "Loss of muscle mass",
            "common_name" => "Loss of muscles",
        ]);
        Symptom::create([
            "id" => "s_623",
            "type" => "symptom",
            "name" => "Edema, both ankles",
            "common_name" => "Swollen ankles",
        ]);
        Symptom::create([
            "id" => "s_625",
            "type" => "symptom",
            "name" => "Headache, exacerbated by tilting head forwards",
            "common_name" => "Headache worsened by tilting head forward",
        ]);
        Symptom::create([
            "id" => "s_629",
            "type" => "symptom",
            "name" => "Feeling of helplessness",
            "common_name" => "Feeling of helplessness",
        ]);
        Symptom::create([
            "id" => "s_630",
            "type" => "symptom",
            "name" => "Vulvovaginal itching",
            "common_name" => "Vulvovaginal itching",
        ]);
        Symptom::create([
            "id" => "s_631",
            "type" => "symptom",
            "name" => "Impaired concentration",
            "common_name" => "Poor concentration",
        ]);
        Symptom::create([
            "id" => "s_632",
            "type" => "symptom",
            "name" => "Feeling of hopelessness",
            "common_name" => "Feeling of hopelessness",
        ]);
        Symptom::create([
            "id" => "s_633",
            "type" => "symptom",
            "name" => "Elevated mood",
            "common_name" => "Elevated mood",
        ]);
        Symptom::create([
            "id" => "s_634",
            "type" => "symptom",
            "name" => "Decreased need for sleep",
            "common_name" => "Decreased need for sleep",
        ]);
        Symptom::create([
            "id" => "s_635",
            "type" => "symptom",
            "name" => "Contentiousness",
            "common_name" => "Causing or likely to cause disagreement",
        ]);
        Symptom::create([
            "id" => "s_636",
            "type" => "symptom",
            "name" => "Financial recklessness",
            "common_name" => "Financial recklessness",
        ]);
        Symptom::create([
            "id" => "s_637",
            "type" => "symptom",
            "name" => "Quickening of thoughts and speech",
            "common_name" => "Quickening of thoughts and speech",
        ]);
        Symptom::create([
            "id" => "s_639",
            "type" => "symptom",
            "name" => "Grandiosity",
            "common_name" => "Grandiosity",
        ]);
        Symptom::create([
            "id" => "s_640",
            "type" => "symptom",
            "name" => "Tenesmus",
            "common_name" => "Feeling of incomplete defecation",
        ]);
        Symptom::create([
            "id" => "s_641",
            "type" => "symptom",
            "name" => "Bowel incontinence",
            "common_name" => "Loss of bowel control",
        ]);
        Symptom::create([
            "id" => "s_642",
            "type" => "symptom",
            "name" => "Mucous secretion in stool",
            "common_name" => "Mucous secretion in stool",
        ]);
        Symptom::create([
            "id" => "s_646",
            "type" => "symptom",
            "name" => "Mood swings",
            "common_name" => "Mood swings",
        ]);
        Symptom::create([
            "id" => "s_647",
            "type" => "symptom",
            "name" => "Simple visual paradelusions",
            "common_name" => "Simple visual paradelusions",
        ]);
        Symptom::create([
            "id" => "s_648",
            "type" => "symptom",
            "name" => "Simple auditory paradelusions",
            "common_name" => "Simple auditory paradelusions",
        ]);
        Symptom::create([
            "id" => "s_649",
            "type" => "symptom",
            "name" => "Psychomotor retardation",
            "common_name" => "Psychomotor retardation",
        ]);
        Symptom::create([
            "id" => "s_650",
            "type" => "symptom",
            "name" => "Muscle weakness",
            "common_name" => "Muscle weakness",
        ]);
        Symptom::create([
            "id" => "s_651",
            "type" => "symptom",
            "name" => "Ataxia",
            "common_name" => "Problems with coordinating movement",
        ]);
        Symptom::create([
            "id" => "s_652",
            "type" => "symptom",
            "name" => "Deep tendon reflexes, decreased",
            "common_name" => "Decreased deep tendon reflexes",
        ]);
        Symptom::create([
            "id" => "s_653",
            "type" => "symptom",
            "name" => "Pupil dilation variation",
            "common_name" => "Pupil dilation variation",
        ]);
        Symptom::create([
            "id" => "s_659",
            "type" => "symptom",
            "name" => "Social isolation",
            "common_name" => "Social isolation",
        ]);
        Symptom::create([
            "id" => "s_660",
            "type" => "symptom",
            "name" => "Fits of anger",
            "common_name" => "Fits of anger",
        ]);
        Symptom::create([
            "id" => "s_661",
            "type" => "symptom",
            "name" => "Decreased motivation",
            "common_name" => "Decreased motivation",
        ]);
        Symptom::create([
            "id" => "s_662",
            "type" => "symptom",
            "name" => "Cough, productive in the morning",
            "common_name" => "Coughing up phlegm in the morning",
        ]);
        Symptom::create([
            "id" => "s_663",
            "type" => "symptom",
            "name" => "Back pain, lumbar, radiating to the groin",
            "common_name" => "Lower back pain spreading to the groin",
        ]);
        Symptom::create([
            "id" => "s_664",
            "type" => "symptom",
            "name" => "Koplik's spots",
            "common_name" =>
                "Small white spots surrounded by red ring on the insides of cheeks",
        ]);
        Symptom::create([
            "id" => "s_665",
            "type" => "symptom",
            "name" => "Measles rash",
            "common_name" => "Measles rash",
        ]);
        Symptom::create([
            "id" => "s_666",
            "type" => "symptom",
            "name" => "Leopard-like spots on the skin",
            "common_name" => "Brick-coloured spots resembling leopard spots",
        ]);
        Symptom::create([
            "id" => "s_668",
            "type" => "symptom",
            "name" => "Unilateral enophthalmos",
            "common_name" => "Sunken eye",
        ]);
        Symptom::create([
            "id" => "s_669",
            "type" => "symptom",
            "name" => "Anhidrosis, face, unilateral",
            "common_name" => "Lack of sweating on one side of the face",
        ]);
        Symptom::create([
            "id" => "s_670",
            "type" => "symptom",
            "name" => "Cough, productive with pink, frothy sputum",
            "common_name" => "Coughing up pink phlegm",
        ]);
        Symptom::create([
            "id" => "s_671",
            "type" => "symptom",
            "name" => "Neck vein distention",
            "common_name" => "Widened neck veins",
        ]);
        Symptom::create([
            "id" => "s_672",
            "type" => "symptom",
            "name" => "Ulcer on skin",
            "common_name" => "Sore on the skin or mucous membrane",
        ]);
        Symptom::create([
            "id" => "s_673",
            "type" => "symptom",
            "name" => "Tongue enlargement",
            "common_name" => "Tongue enlargement",
        ]);
        Symptom::create([
            "id" => "s_675",
            "type" => "symptom",
            "name" => "Delusions of persecution",
            "common_name" => "Delusions of persecution",
        ]);
        Symptom::create([
            "id" => "s_676",
            "type" => "symptom",
            "name" => "Delusions of reference",
            "common_name" => "Delusions of reference",
        ]);
        Symptom::create([
            "id" => "s_677",
            "type" => "symptom",
            "name" => "Delusions of grandeur",
            "common_name" => "Delusions of grandeur",
        ]);
        Symptom::create([
            "id" => "s_678",
            "type" => "symptom",
            "name" => "Nihilistic delusions",
            "common_name" => "Nihilistic delusions",
        ]);
        Symptom::create([
            "id" => "s_679",
            "type" => "symptom",
            "name" => "Hypochondriacal delusions",
            "common_name" => "Hypochondriacal delusions",
        ]);
        Symptom::create([
            "id" => "s_680",
            "type" => "symptom",
            "name" => "Delusions of influence",
            "common_name" => "Delusions of influence",
        ]);
        Symptom::create([
            "id" => "s_681",
            "type" => "symptom",
            "name" => "Hallucinations, visual",
            "common_name" => "Visual hallucinations",
        ]);
        Symptom::create([
            "id" => "s_682",
            "type" => "symptom",
            "name" => "Hallucinations, auditory",
            "common_name" => "Auditory hallucinations",
        ]);
        Symptom::create([
            "id" => "s_683",
            "type" => "symptom",
            "name" => "Hallucinations, gustatory",
            "common_name" => "Gustatory hallucinations",
        ]);
        Symptom::create([
            "id" => "s_684",
            "type" => "symptom",
            "name" => "Hallucinations, olfactory",
            "common_name" => "Olfactory hallucinations",
        ]);
        Symptom::create([
            "id" => "s_685",
            "type" => "symptom",
            "name" => "Hallucinations, tactile",
            "common_name" => "Tactile hallucinations",
        ]);
        Symptom::create([
            "id" => "s_686",
            "type" => "symptom",
            "name" => "Hallucinations",
            "common_name" => "Hallucinations",
        ]);
        Symptom::create([
            "id" => "s_687",
            "type" => "symptom",
            "name" => "Obsessions, fears",
            "common_name" => "Obsessive worries",
        ]);
        Symptom::create([
            "id" => "s_688",
            "type" => "symptom",
            "name" => "Obsessions, images",
            "common_name" => "Dark thoughts",
        ]);
        Symptom::create([
            "id" => "s_689",
            "type" => "symptom",
            "name" => "Urination in small amounts",
            "common_name" => "Urination in small amounts",
        ]);
        Symptom::create([
            "id" => "s_690",
            "type" => "symptom",
            "name" => "Urinary urgency",
            "common_name" => "Urgent need to urinate",
        ]);
        Symptom::create([
            "id" => "s_691",
            "type" => "symptom",
            "name" => "Trouble beginning urination",
            "common_name" => "Trouble beginning urination",
        ]);
        Symptom::create([
            "id" => "s_692",
            "type" => "symptom",
            "name" => "Red and swollen oral mucosa",
            "common_name" => "Red and swollen inside of mouth",
        ]);
        Symptom::create([
            "id" => "s_694",
            "type" => "symptom",
            "name" => "Dermatological changes, located in the mouth",
            "common_name" => "Dermatological changes inside the mouth",
        ]);
        Symptom::create([
            "id" => "s_696",
            "type" => "symptom",
            "name" => "Urinary retention",
            "common_name" => "Unable to urinate",
        ]);
        Symptom::create([
            "id" => "s_697",
            "type" => "symptom",
            "name" => "Decreased skin turgor",
            "common_name" => "Decreased skin elasticity",
        ]);
        Symptom::create([
            "id" => "s_698",
            "type" => "symptom",
            "name" => "Sunken eyeballs",
            "common_name" => "Sunken eyeballs",
        ]);
        Symptom::create([
            "id" => "s_699",
            "type" => "symptom",
            "name" => "Edema, dependent on the body position",
            "common_name" => "Swelling dependent on the position of the body",
        ]);
        Symptom::create([
            "id" => "s_700",
            "type" => "symptom",
            "name" => "Edema",
            "common_name" => "Swelling",
        ]);
        Symptom::create([
            "id" => "s_701",
            "type" => "symptom",
            "name" => "Edema, daytime",
            "common_name" => "Daytime swelling",
        ]);
        Symptom::create([
            "id" => "s_705",
            "type" => "symptom",
            "name" =>
                "Re-experiencing the psychological trauma in recurring flashbacks",
            "common_name" =>
                "Re-experiencing the traumatic event in recurring distressing memories",
        ]);
        Symptom::create([
            "id" => "s_706",
            "type" => "symptom",
            "name" => "Re-experiencing the psychological trauma in nightmares",
            "common_name" =>
                "Re-experiencing the traumatic event in nightmares",
        ]);
        Symptom::create([
            "id" => "s_707",
            "type" => "symptom",
            "name" => "Re-experiencing traumatic event",
            "common_name" => "Re-experiencing traumatic event",
        ]);
        Symptom::create([
            "id" => "s_708",
            "type" => "symptom",
            "name" =>
                "Re-experiencing the psychological trauma through physiological reactivity",
            "common_name" =>
                "Strong physiological reactions while re-experiencing the traumatic event",
        ]);
        Symptom::create([
            "id" => "s_709",
            "type" => "symptom",
            "name" =>
                "Avoiding thoughts, feelings, or conversations related to a traumatic experience",
            "common_name" =>
                "Avoiding thoughts, feelings, or conversations related to a traumatic experience",
        ]);
        Symptom::create([
            "id" => "s_710",
            "type" => "symptom",
            "name" =>
                "Avoiding actions, places, or people that bring back memories of a traumatic experience",
            "common_name" =>
                "Avoiding actions, places, or people that bring back memories of a traumatic experience",
        ]);
        Symptom::create([
            "id" => "s_711",
            "type" => "symptom",
            "name" =>
                "Inability to remember important aspects of a traumatic experience",
            "common_name" =>
                "Inability to remember important aspects of a traumatic experience",
        ]);
        Symptom::create([
            "id" => "s_715",
            "type" => "symptom",
            "name" => "Sneezing",
            "common_name" => "Sneezing",
        ]);
        Symptom::create([
            "id" => "s_716",
            "type" => "symptom",
            "name" => "Impaired social functioning",
            "common_name" => "Difficulty functioning at home, work, or school",
        ]);
        Symptom::create([
            "id" => "s_717",
            "type" => "symptom",
            "name" => "Avoiding public appearances",
            "common_name" => "Avoiding public appearances",
        ]);
        Symptom::create([
            "id" => "s_718",
            "type" => "symptom",
            "name" => "Avoiding eating or drinking in public",
            "common_name" => "Avoiding eating or drinking in public",
        ]);
        Symptom::create([
            "id" => "s_719",
            "type" => "symptom",
            "name" => "Avoiding eating in someone else's presence",
            "common_name" => "Avoiding eating in someone else's presence",
        ]);
        Symptom::create([
            "id" => "s_720",
            "type" => "symptom",
            "name" => "Avoiding talking to authority figures",
            "common_name" => "Avoiding talking to authority figures",
        ]);
        Symptom::create([
            "id" => "s_721",
            "type" => "symptom",
            "name" => "Fear of public appearances",
            "common_name" => "Fear of public appearances",
        ]);
        Symptom::create([
            "id" => "s_722",
            "type" => "symptom",
            "name" => "Panic attacks in public appearances",
            "common_name" => "Panic attacks in public appearances",
        ]);
        Symptom::create([
            "id" => "s_723",
            "type" => "symptom",
            "name" => "Excessive fear in public situations",
            "common_name" => "Excessive fear in public situations",
        ]);
        Symptom::create([
            "id" => "s_725",
            "type" => "symptom",
            "name" => "Excessive worry about the health of a child",
            "common_name" => "Excessive worry about the health of a child",
        ]);
        Symptom::create([
            "id" => "s_727",
            "type" => "symptom",
            "name" => "Difficulty bonding with infant",
            "common_name" => "Difficulty bonding with baby",
        ]);
        Symptom::create([
            "id" => "s_728",
            "type" => "symptom",
            "name" => "Thoughts of harming one's own child",
            "common_name" => "Thoughts of harming one's own child",
        ]);
        Symptom::create([
            "id" => "s_729",
            "type" => "symptom",
            "name" => "Thoughts of killing one's own child",
            "common_name" => "Thoughts of killing one's own child",
        ]);
        Symptom::create([
            "id" => "s_730",
            "type" => "symptom",
            "name" => "Diurnal mood variation",
            "common_name" => "Mood better in the evening than in the morning",
        ]);
        Symptom::create([
            "id" => "s_731",
            "type" => "symptom",
            "name" => "Disorganized behaviour",
            "common_name" => "Disorganized behaviour",
        ]);
        Symptom::create([
            "id" => "s_732",
            "type" => "symptom",
            "name" =>
                "Pain in lower limb, calf, severe while walking, intermittent claudication",
            "common_name" =>
                "Leg pain occurring during exertion and relieved by rest",
        ]);
        Symptom::create([
            "id" => "s_733",
            "type" => "symptom",
            "name" => "Erectile dysfunction",
            "common_name" => "Erectile dysfunction",
        ]);
        Symptom::create([
            "id" => "s_734",
            "type" => "symptom",
            "name" => "Claudication in upper leg",
            "common_name" =>
                "Acute thigh or buttock pain appearing during exertion and relieving after short rest",
        ]);
        Symptom::create([
            "id" => "s_735",
            "type" => "symptom",
            "name" => "Weak pulse in legs",
            "common_name" => "Weak pulse in legs",
        ]);
        Symptom::create([
            "id" => "s_744",
            "type" => "symptom",
            "name" => "Paresis, ascending",
            "common_name" => "Ascending muscle weakness",
        ]);
        Symptom::create([
            "id" => "s_746",
            "type" => "symptom",
            "name" => "Loss or impairment of proprioception",
            "common_name" => "Loss or impairment of proprioception",
        ]);
        Symptom::create([
            "id" => "s_747",
            "type" => "symptom",
            "name" =>
                "Loss of temperature sensation, impaired temperature sensation",
            "common_name" => "Loss of temperature sensation",
        ]);
        Symptom::create([
            "id" => "s_750",
            "type" => "symptom",
            "name" => "Ocular motility disorder",
            "common_name" => "Difficulty moving eyes",
        ]);
        Symptom::create([
            "id" => "s_756",
            "type" => "symptom",
            "name" => "Gottron's papules",
            "common_name" =>
                "Red, painful, or scaly bumps over hand and finger joints",
        ]);
        Symptom::create([
            "id" => "s_757",
            "type" => "symptom",
            "name" => "Holster sign",
            "common_name" => "Redness on hips or sides of the thighs",
        ]);
        Symptom::create([
            "id" => "s_758",
            "type" => "symptom",
            "name" => "Redness on shoulders and nape of neck",
            "common_name" =>
                "Redness on the shoulders and the back of the neck",
        ]);
        Symptom::create([
            "id" => "s_759",
            "type" => "symptom",
            "name" => "V-shaped redness on chest",
            "common_name" => "V-shaped redness on the chest",
        ]);
        Symptom::create([
            "id" => "s_760",
            "type" => "symptom",
            "name" => "Hyperkeratosis on hands",
            "common_name" => "Thickened and cracked skin on hands",
        ]);
        Symptom::create([
            "id" => "s_762",
            "type" => "symptom",
            "name" => "Purpuric rash",
            "common_name" =>
                "Rash with small red or purple spots, not fading under pressure",
        ]);
        Symptom::create([
            "id" => "s_763",
            "type" => "symptom",
            "name" => "Livedo reticularis",
            "common_name" => "Mottled skin",
        ]);
        Symptom::create([
            "id" => "s_768",
            "type" => "symptom",
            "name" => "Delusion of guilt or sin",
            "common_name" => "Delusion of guilt or sin",
        ]);
        Symptom::create([
            "id" => "s_769",
            "type" => "symptom",
            "name" => "Bizarre delusion",
            "common_name" => "Bizarre delusion",
        ]);
        Symptom::create([
            "id" => "s_770",
            "type" => "symptom",
            "name" => "Poor personal hygiene",
            "common_name" => "Poor personal hygiene",
        ]);
        Symptom::create([
            "id" => "s_771",
            "type" => "symptom",
            "name" => "Blunted affect",
            "common_name" => "Blunted affect",
        ]);
        Symptom::create([
            "id" => "s_772",
            "type" => "symptom",
            "name" => "Flat affect",
            "common_name" => "Flat affect",
        ]);
        Symptom::create([
            "id" => "s_773",
            "type" => "symptom",
            "name" => "Social maladjustment",
            "common_name" => "Social maladjustment",
        ]);
        Symptom::create([
            "id" => "s_774",
            "type" => "symptom",
            "name" => "Delusion of impoverishment",
            "common_name" => "Delusion of impoverishment",
        ]);
        Symptom::create([
            "id" => "s_776",
            "type" => "symptom",
            "name" => "Waking up early",
            "common_name" => "Waking up early",
        ]);
        Symptom::create([
            "id" => "s_777",
            "type" => "symptom",
            "name" => "Prolonged nighttime sleep",
            "common_name" => "Prolonged nighttime sleep",
        ]);
        Symptom::create([
            "id" => "s_778",
            "type" => "symptom",
            "name" => "Lack of boundaries in interpersonal relations",
            "common_name" => "Lack of boundaries in relationships",
        ]);
        Symptom::create([
            "id" => "s_779",
            "type" => "symptom",
            "name" => "Making rash or impulsive decisions",
            "common_name" => "Making rash or impulsive decisions",
        ]);
        Symptom::create([
            "id" => "s_780",
            "type" => "symptom",
            "name" => "Religious delusion",
            "common_name" => "Religious delusion",
        ]);
        Symptom::create([
            "id" => "s_789",
            "type" => "symptom",
            "name" => "Urticaria triggered by scratching",
            "common_name" => "Hives after scratching",
        ]);
        Symptom::create([
            "id" => "s_790",
            "type" => "symptom",
            "name" => "Urticaria triggered by prolonged pressure on the skin",
            "common_name" =>
                "Hives appearing after exposure to prolonged pressure on the skin",
        ]);
        Symptom::create([
            "id" => "s_791",
            "type" => "symptom",
            "name" => "Urticaria triggered by cold",
            "common_name" =>
                "Hives appearing after exposure to cold, water, or wind",
        ]);
        Symptom::create([
            "id" => "s_793",
            "type" => "symptom",
            "name" => "Urticaria triggered by heat",
            "common_name" => "Hives appearing after exposure to heat",
        ]);
        Symptom::create([
            "id" => "s_794",
            "type" => "symptom",
            "name" => "Urticaria triggered by sunlight",
            "common_name" =>
                "Hives appearing after exposure to sunlight or UV radiation",
        ]);
        Symptom::create([
            "id" => "s_795",
            "type" => "symptom",
            "name" => "Pencil-thin stools",
            "common_name" => "Pencil-thin stools",
        ]);
        Symptom::create([
            "id" => "s_799",
            "type" => "symptom",
            "name" => "Headache, worse in the morning",
            "common_name" => "Morning headache",
        ]);
        Symptom::create([
            "id" => "s_801",
            "type" => "symptom",
            "name" => "Vomiting, projectile",
            "common_name" => "Vomiting that ejects with great force",
        ]);
        Symptom::create([
            "id" => "s_803",
            "type" => "symptom",
            "name" => "Papilledema",
            "common_name" => "Papilledema",
        ]);
        Symptom::create([
            "id" => "s_811",
            "type" => "symptom",
            "name" => "Cardiomegaly",
            "common_name" => "Heart enlargement",
        ]);
        Symptom::create([
            "id" => "s_814",
            "type" => "symptom",
            "name" => "Hemianopsia bitemporalis",
            "common_name" => "Hemianopsia bitemporalis",
        ]);
        Symptom::create([
            "id" => "s_816",
            "type" => "symptom",
            "name" => "Risky alcohol consumption",
            "common_name" => "Risky drinking",
        ]);
        Symptom::create([
            "id" => "s_817",
            "type" => "symptom",
            "name" => "Alcohol craving",
            "common_name" => "Constant urge to drink alcohol",
        ]);
        Symptom::create([
            "id" => "s_818",
            "type" => "symptom",
            "name" => "Alcohol withdrawal syndrome",
            "common_name" => "Symptoms following  a reduction in alcohol use",
        ]);
        Symptom::create([
            "id" => "s_819",
            "type" => "symptom",
            "name" => "Drinking alcohol despite awareness of harmful effects",
            "common_name" =>
                "Drinking alcohol despite awareness of harmful effects",
        ]);
        Symptom::create([
            "id" => "s_820",
            "type" => "symptom",
            "name" => "Neglecting family, work, or hobbies due to alcohol",
            "common_name" => "Neglecting duties and activities due to drinking",
        ]);
        Symptom::create([
            "id" => "s_822",
            "type" => "symptom",
            "name" => "Nonstop alcohol consumption for several days",
            "common_name" => "Constantly drinking alcohol for several days",
        ]);
        Symptom::create([
            "id" => "s_823",
            "type" => "symptom",
            "name" => "Drunk driving",
            "common_name" => "Drunk driving",
        ]);
        Symptom::create([
            "id" => "s_824",
            "type" => "symptom",
            "name" => "Violating social norms after drinking alcohol",
            "common_name" => "Violating social norms after drinking alcohol",
        ]);
        Symptom::create([
            "id" => "s_825",
            "type" => "symptom",
            "name" => "Impaired memory, alcohol-related amnesia",
            "common_name" => "Alcohol-related amnesia",
        ]);
        Symptom::create([
            "id" => "s_827",
            "type" => "symptom",
            "name" => "Drinking alcohol at work",
            "common_name" => "Drinking alcohol at work",
        ]);
        Symptom::create([
            "id" => "s_828",
            "type" => "symptom",
            "name" => "Drinking alcohol alone",
            "common_name" => "Drinking alcohol alone",
        ]);
        Symptom::create([
            "id" => "s_829",
            "type" => "symptom",
            "name" => "Secret drinking",
            "common_name" => "Secret drinking",
        ]);
        Symptom::create([
            "id" => "s_830",
            "type" => "symptom",
            "name" => "Impaired memory, short term",
            "common_name" => "Impaired short-term memory",
        ]);
        Symptom::create([
            "id" => "s_831",
            "type" => "symptom",
            "name" => "Confabulation",
            "common_name" => "Confabulation",
        ]);
        Symptom::create([
            "id" => "s_833",
            "type" => "symptom",
            "name" => "Agnosia",
            "common_name" =>
                "Inability to recognize objects, people, sounds, shapes, or smells",
        ]);
        Symptom::create([
            "id" => "s_835",
            "type" => "symptom",
            "name" => "Seasonal pattern of depressive symptoms",
            "common_name" => "Seasonal pattern of depressive symptoms",
        ]);
        Symptom::create([
            "id" => "s_836",
            "type" => "symptom",
            "name" => "Schizophasia",
            "common_name" => "Schizophasia",
        ]);
        Symptom::create([
            "id" => "s_837",
            "type" => "symptom",
            "name" => "Alogia",
            "common_name" => "Poverty of speech",
        ]);
        Symptom::create([
            "id" => "s_838",
            "type" => "symptom",
            "name" => "Paralogical thinking",
            "common_name" => "Paralogical thinking",
        ]);
        Symptom::create([
            "id" => "s_839",
            "type" => "symptom",
            "name" =>
                "Delusions of thought insertion, thought withdrawal, thought broadcasting",
            "common_name" =>
                "Delusions of thought insertion, thought withdrawal, thought broadcasting",
        ]);
        Symptom::create([
            "id" => "s_840",
            "type" => "symptom",
            "name" => "Hearing voices commenting",
            "common_name" => "Hearing voices commenting",
        ]);
        Symptom::create([
            "id" => "s_841",
            "type" => "symptom",
            "name" => "Hearing voices arguing",
            "common_name" => "Hearing voices arguing",
        ]);
        Symptom::create([
            "id" => "s_842",
            "type" => "symptom",
            "name" =>
                "Behavioural changes, ignoring consequences and social norms",
            "common_name" =>
                "Behavioural changes, ignoring consequences and social norms",
        ]);
        Symptom::create([
            "id" => "s_844",
            "type" => "symptom",
            "name" => "Organic cause",
            "common_name" => "Organic cause",
        ]);
        Symptom::create([
            "id" => "s_856",
            "type" => "symptom",
            "name" => "Auscultative wheezes over the thorax",
            "common_name" => "Auscultative wheezes over the thorax",
        ]);
        Symptom::create([
            "id" => "s_857",
            "type" => "symptom",
            "name" => "Auscultative fine crackles over the thorax",
            "common_name" => "Auscultative fine crackles over the thorax",
        ]);
        Symptom::create([
            "id" => "s_866",
            "type" => "symptom",
            "name" => "Trousseau sign of latent tetany",
            "common_name" => "Trousseau sign of latent tetany",
        ]);
        Symptom::create([
            "id" => "s_867",
            "type" => "symptom",
            "name" => "Chvostek's sign",
            "common_name" => "Chvostek's sign",
        ]);
        Symptom::create([
            "id" => "s_868",
            "type" => "symptom",
            "name" => "Orbicularis oris muscle spasm",
            "common_name" => "Orbicularis oris muscle spasm",
        ]);
        Symptom::create([
            "id" => "s_869",
            "type" => "symptom",
            "name" => "Clubfoot",
            "common_name" => "Clubfoot",
        ]);
        Symptom::create([
            "id" => "s_878",
            "type" => "symptom",
            "name" => "Deep tendon reflexes, increased",
            "common_name" => "Increased deep tendon reflexes",
        ]);
        Symptom::create([
            "id" => "s_884",
            "type" => "symptom",
            "name" => "Agoraphobia",
            "common_name" =>
                "Fear of places and situations that might cause panic, helplessness or embarrassment",
        ]);
        Symptom::create([
            "id" => "s_915",
            "type" => "symptom",
            "name" => "Phobia",
            "common_name" => "Phobia",
        ]);
        Symptom::create([
            "id" => "s_916",
            "type" => "symptom",
            "name" => "Depressed mood, more than 2 weeks",
            "common_name" => "Consistently depressed for more than 2 weeks",
        ]);
        Symptom::create([
            "id" => "s_917",
            "type" => "symptom",
            "name" => "Insomnia",
            "common_name" => "Insomnia",
        ]);
        Symptom::create([
            "id" => "s_935",
            "type" => "symptom",
            "name" => "Decreased hearing, variable intensity and duration",
            "common_name" =>
                "Hearing loss with variable intensity and duration",
        ]);
        Symptom::create([
            "id" => "s_936",
            "type" => "symptom",
            "name" => "Dizziness, vertigo",
            "common_name" => "Dizziness, vertigo",
        ]);
        Symptom::create([
            "id" => "s_957",
            "type" => "symptom",
            "name" => "Homonymous hemianopsia",
            "common_name" => "Visual field loss on the same side of both eyes",
        ]);
        Symptom::create([
            "id" => "s_959",
            "type" => "symptom",
            "name" => "Sensory loss involving the face",
            "common_name" => "Loss of feeling in face",
        ]);
        Symptom::create([
            "id" => "s_962",
            "type" => "symptom",
            "name" => "Dysphagia",
            "common_name" => "Difficulty swallowing",
        ]);
        Symptom::create([
            "id" => "s_964",
            "type" => "symptom",
            "name" => "Lateropulsion",
            "common_name" => "Falling or losing gait on one side",
        ]);
        Symptom::create([
            "id" => "s_965",
            "type" => "symptom",
            "name" => "Neck pain, unilateral",
            "common_name" => "Neck pain on one side",
        ]);
        Symptom::create([
            "id" => "s_967",
            "type" => "symptom",
            "name" => "Decreased visual acuity",
            "common_name" => "Decreased vision",
        ]);
        Symptom::create([
            "id" => "s_970",
            "type" => "symptom",
            "name" => "Headache, occipital",
            "common_name" => "Headache located at back of head",
        ]);
        Symptom::create([
            "id" => "s_971",
            "type" => "symptom",
            "name" => "Paresthesia, face",
            "common_name" => "Face numbness",
        ]);
        Symptom::create([
            "id" => "s_972",
            "type" => "symptom",
            "name" => "Sensory loss in both arms",
            "common_name" => "Loss of feeling in both arms",
        ]);
        Symptom::create([
            "id" => "s_973",
            "type" => "symptom",
            "name" => "Paresthesia, both upper limbs",
            "common_name" => "Numbness of both upper limbs",
        ]);
        Symptom::create([
            "id" => "s_974",
            "type" => "symptom",
            "name" => "Drop attack",
            "common_name" => "Sudden spontaneous fall",
        ]);
        Symptom::create([
            "id" => "s_989",
            "type" => "symptom",
            "name" => "Pyramidal signs",
            "common_name" => "Pyramidal signs",
        ]);
        Symptom::create([
            "id" => "s_990",
            "type" => "symptom",
            "name" => "Frontal release signs",
            "common_name" => "Frontal release signs",
        ]);
        Symptom::create([
            "id" => "s_991",
            "type" => "symptom",
            "name" => "Increased masseter reflex",
            "common_name" => "Jaw jerk",
        ]);
        Symptom::create([
            "id" => "s_995",
            "type" => "symptom",
            "name" => "Tongue muscle atrophy",
            "common_name" => "Decline in tongue size",
        ]);
        Symptom::create([
            "id" => "s_996",
            "type" => "symptom",
            "name" => "Cervical dystonia",
            "common_name" => "Cervical dystonia",
        ]);
        Symptom::create([
            "id" => "s_1005",
            "type" => "symptom",
            "name" => "Paresis, hemiparesis",
            "common_name" => "Weakness of only one side of the body",
        ]);
        Symptom::create([
            "id" => "s_1006",
            "type" => "symptom",
            "name" => "Lack of initiative, motivation, or drive",
            "common_name" => "Lack of initiative, motivation, or drive",
        ]);
        Symptom::create([
            "id" => "s_1007",
            "type" => "symptom",
            "name" => "Disinhibition",
            "common_name" => "Disinhibition",
        ]);
        Symptom::create([
            "id" => "s_1010",
            "type" => "symptom",
            "name" => "Apraxia",
            "common_name" => "Apraxia",
        ]);
        Symptom::create([
            "id" => "s_1012",
            "type" => "symptom",
            "name" => "Agraphia",
            "common_name" => "Loss of writing ability",
        ]);
        Symptom::create([
            "id" => "s_1013",
            "type" => "symptom",
            "name" => "Buccofacial or orofacial apraxia",
            "common_name" => "Buccofacial or orofacial apraxia",
        ]);
        Symptom::create([
            "id" => "s_1018",
            "type" => "symptom",
            "name" => "Perseveration",
            "common_name" => "Perseveration",
        ]);
        Symptom::create([
            "id" => "s_1021",
            "type" => "symptom",
            "name" => "Diminished superficial reflexes",
            "common_name" => "Diminished superficial reflexes",
        ]);
        Symptom::create([
            "id" => "s_1023",
            "type" => "symptom",
            "name" => "Babinski sign",
            "common_name" => "Babinski sign",
        ]);
        Symptom::create([
            "id" => "s_1027",
            "type" => "symptom",
            "name" => "Loss of vision in a superior quadrant",
            "common_name" => "Loss of vision in a superior quadrant",
        ]);
        Symptom::create([
            "id" => "s_1028",
            "type" => "symptom",
            "name" => "Auditory verbal agnosia",
            "common_name" => "Auditory verbal agnosia",
        ]);
        Symptom::create([
            "id" => "s_1032",
            "type" => "symptom",
            "name" => "Amusia",
            "common_name" => "Inability to produce or recognize musical sounds",
        ]);
        Symptom::create([
            "id" => "s_1034",
            "type" => "symptom",
            "name" => "Visual agnosia",
            "common_name" => "Visual agnosia",
        ]);
        Symptom::create([
            "id" => "s_1035",
            "type" => "symptom",
            "name" => "Diminished fear responses",
            "common_name" => "Diminished fear responses",
        ]);
        Symptom::create([
            "id" => "s_1045",
            "type" => "symptom",
            "name" => "Splenomegaly",
            "common_name" => "Enlarged spleen",
        ]);
        Symptom::create([
            "id" => "s_1050",
            "type" => "symptom",
            "name" => "Tooth loss",
            "common_name" => "Tooth loss",
        ]);
        Symptom::create([
            "id" => "s_1051",
            "type" => "symptom",
            "name" => "Hepatomegaly",
            "common_name" => "Hepatomegaly",
        ]);
        Symptom::create([
            "id" => "s_1052",
            "type" => "symptom",
            "name" => "Enlarged kidneys",
            "common_name" => "Enlarged kidneys",
        ]);
        Symptom::create([
            "id" => "s_1054",
            "type" => "symptom",
            "name" => "Lhermitte's sign",
            "common_name" => "Lhermitte's sign",
        ]);
        Symptom::create([
            "id" => "s_1055",
            "type" => "symptom",
            "name" => "Retrobulbar neuritis",
            "common_name" => "Retrobulbar neuritis",
        ]);
        Symptom::create([
            "id" => "s_1056",
            "type" => "symptom",
            "name" => "Trigeminal neuralgia",
            "common_name" => "Trigeminal neuralgia",
        ]);
        Symptom::create([
            "id" => "s_1057",
            "type" => "symptom",
            "name" => "Enlarged salivary glands",
            "common_name" => "Enlarged salivary glands",
        ]);
        Symptom::create([
            "id" => "s_1063",
            "type" => "symptom",
            "name" => "Paresthesia, both lower limbs",
            "common_name" => "Numbness of both lower limbs",
        ]);
        Symptom::create([
            "id" => "s_1066",
            "type" => "symptom",
            "name" => "Paresthesia in both upper limbs, glove distribution",
            "common_name" =>
                "Paresthesia in both upper limbs, glove distribution",
        ]);
        Symptom::create([
            "id" => "s_1067",
            "type" => "symptom",
            "name" => "Sudden face flushing",
            "common_name" => "Sudden face flushing",
        ]);
        Symptom::create([
            "id" => "s_1068",
            "type" => "symptom",
            "name" => "Paresthesias, symmetrical",
            "common_name" => "Symmetrical paresthesias",
        ]);
        Symptom::create([
            "id" => "s_1069",
            "type" => "symptom",
            "name" => "Paresthesia, ascending",
            "common_name" => "Ascending paresthesias",
        ]);
        Symptom::create([
            "id" => "s_1070",
            "type" => "symptom",
            "name" =>
                "Loss of sense of vibration in distal parts of extremities",
            "common_name" =>
                "Loss of sense of vibration in distal parts of extremities",
        ]);
        Symptom::create([
            "id" => "s_1072",
            "type" => "symptom",
            "name" => "Absence of deep reflexes",
            "common_name" => "Absence of deep reflexes",
        ]);
        Symptom::create([
            "id" => "s_1073",
            "type" => "symptom",
            "name" => "Bilateral absence of Achilles tendon reflex",
            "common_name" => "Bilateral absence of Achilles tendon reflex",
        ]);
        Symptom::create([
            "id" => "s_1074",
            "type" => "symptom",
            "name" => "Trophic changes",
            "common_name" => "Trophic changes",
        ]);
        Symptom::create([
            "id" => "s_1076",
            "type" => "symptom",
            "name" => "Trophic ulcer",
            "common_name" => "Trophic ulcer",
        ]);
        Symptom::create([
            "id" => "s_1078",
            "type" => "symptom",
            "name" => "Trophic ulcer on the plantar side of the foot",
            "common_name" => "Trophic ulcer on the plantar side of the foot",
        ]);
        Symptom::create([
            "id" => "s_1083",
            "type" => "symptom",
            "name" => "Interosseous muscles atrophy, hands",
            "common_name" => "Interosseous muscles atrophy, hands",
        ]);
        Symptom::create([
            "id" => "s_1084",
            "type" => "symptom",
            "name" => "Interosseous muscles atrophy, feet",
            "common_name" => "Interosseous muscles atrophy, feet",
        ]);
        Symptom::create([
            "id" => "s_1087",
            "type" => "symptom",
            "name" => "Fear of going insane",
            "common_name" => "Fear of going insane",
        ]);
        Symptom::create([
            "id" => "s_1088",
            "type" => "symptom",
            "name" => "Fear of losing control",
            "common_name" => "Fear of losing control",
        ]);
        Symptom::create([
            "id" => "s_1089",
            "type" => "symptom",
            "name" => "Prostate enlargement",
            "common_name" => "Prostate enlargement",
        ]);
        Symptom::create([
            "id" => "s_1090",
            "type" => "symptom",
            "name" => "Glassy eyes",
            "common_name" => "Glassy eyes",
        ]);
        Symptom::create([
            "id" => "s_1091",
            "type" => "symptom",
            "name" => "Chemosis",
            "common_name" => "Chemosis",
        ]);
        Symptom::create([
            "id" => "s_1092",
            "type" => "symptom",
            "name" => "Positive prick or patch skin allergy test",
            "common_name" => "Positive prick or patch skin allergy test",
        ]);
        Symptom::create([
            "id" => "s_1093",
            "type" => "symptom",
            "name" => "Positive allergy challenge",
            "common_name" => "Positive allergy challenge",
        ]);
        Symptom::create([
            "id" => "s_1094",
            "type" => "symptom",
            "name" => "Clearing the throat",
            "common_name" => "Hawking",
        ]);
        Symptom::create([
            "id" => "s_1095",
            "type" => "symptom",
            "name" => "Impaired smell",
            "common_name" => "Difficulty smelling",
        ]);
        Symptom::create([
            "id" => "s_1096",
            "type" => "symptom",
            "name" => "Taste disorders",
            "common_name" => "Abnormal or loss of taste",
        ]);
        Symptom::create([
            "id" => "s_1097",
            "type" => "symptom",
            "name" => "Swelling of nasal mucosa",
            "common_name" => "Swelling of nasal mucosa",
        ]);
        Symptom::create([
            "id" => "s_1098",
            "type" => "symptom",
            "name" => "Swollen blue or bluish-gray nasal mucosa",
            "common_name" => "Swollen blue or bluish-gray nasal mucosa",
        ]);
        Symptom::create([
            "id" => "s_1099",
            "type" => "symptom",
            "name" => "Swelling of nasal concha",
            "common_name" => "Swelling of nasal concha",
        ]);
        Symptom::create([
            "id" => "s_1100",
            "type" => "symptom",
            "name" => "Transverse furrow on the nose",
            "common_name" => "Transverse furrow on the nose",
        ]);
        Symptom::create([
            "id" => "s_1102",
            "type" => "symptom",
            "name" => "Pharyngeal swelling, bilateral",
            "common_name" => "Swelling on both sides of throat",
        ]);
        Symptom::create([
            "id" => "s_1103",
            "type" => "symptom",
            "name" => "Enlargement of the lymphoid tissue in the pharynx",
            "common_name" =>
                "Enlargement of the lymphoid tissue in the pharynx",
        ]);
        Symptom::create([
            "id" => "s_1104",
            "type" => "symptom",
            "name" => "Mouth breathing",
            "common_name" => "Mouth breathing",
        ]);
        Symptom::create([
            "id" => "s_1105",
            "type" => "symptom",
            "name" => "Cyanosis under the eyes",
            "common_name" => "Dark circles under eyes",
        ]);
        Symptom::create([
            "id" => "s_1106",
            "type" => "symptom",
            "name" => "Dennie-Morgan fold",
            "common_name" => "Dennie-Morgan fold",
        ]);
        Symptom::create([
            "id" => "s_1107",
            "type" => "symptom",
            "name" => "Opacified tympanic membrane",
            "common_name" => "Opacified tympanic membrane",
        ]);
        Symptom::create([
            "id" => "s_1108",
            "type" => "symptom",
            "name" => "High-arched palate",
            "common_name" => "High-arched palate",
        ]);
        Symptom::create([
            "id" => "s_1109",
            "type" => "symptom",
            "name" => "Discharge in tympanic cavity",
            "common_name" => "Discharge in tympanic cavity",
        ]);
        Symptom::create([
            "id" => "s_1110",
            "type" => "symptom",
            "name" => "Overbite",
            "common_name" => "Overbite",
        ]);
        Symptom::create([
            "id" => "s_1111",
            "type" => "symptom",
            "name" => "Adenoid face",
            "common_name" => "Adenoid face",
        ]);
        Symptom::create([
            "id" => "s_1112",
            "type" => "symptom",
            "name" => "Pain in both lower limbs, stocking distribution",
            "common_name" => "Pain in both lower limbs, stocking distribution",
        ]);
        Symptom::create([
            "id" => "s_1114",
            "type" => "symptom",
            "name" => "Terry's nails",
            "common_name" => "Terry's nails",
        ]);
        Symptom::create([
            "id" => "s_1115",
            "type" => "symptom",
            "name" => "Loss of body hair",
            "common_name" => "Loss of body hair",
        ]);
        Symptom::create([
            "id" => "s_1116",
            "type" => "symptom",
            "name" => "Ascites",
            "common_name" => "Ascites",
        ]);
        Symptom::create([
            "id" => "s_1117",
            "type" => "symptom",
            "name" => "Testicular atrophy",
            "common_name" => "Shrinking or diminishing of both testicles",
        ]);
        Symptom::create([
            "id" => "s_1119",
            "type" => "symptom",
            "name" => "Bladder sphincter dysfunction",
            "common_name" => "Bladder sphincter dysfunction",
        ]);
        Symptom::create([
            "id" => "s_1123",
            "type" => "symptom",
            "name" => "Anhidrosis",
            "common_name" => "Lack of sweating",
        ]);
        Symptom::create([
            "id" => "s_1125",
            "type" => "symptom",
            "name" => "Erythema, palmar",
            "common_name" => "Red skin on palms",
        ]);
        Symptom::create([
            "id" => "s_1139",
            "type" => "symptom",
            "name" => "Suicidal thoughts",
            "common_name" => "Suicidal thoughts",
        ]);
        Symptom::create([
            "id" => "s_1140",
            "type" => "symptom",
            "name" => "Suicidal thoughts with plan and steps taken",
            "common_name" => "Suicidal thoughts with plan and steps taken",
        ]);
        Symptom::create([
            "id" => "s_1141",
            "type" => "symptom",
            "name" => "Russell's sign",
            "common_name" => "Russell's sign",
        ]);
        Symptom::create([
            "id" => "s_1142",
            "type" => "symptom",
            "name" => "Myalgia",
            "common_name" => "Muscle pain",
        ]);
        Symptom::create([
            "id" => "s_1144",
            "type" => "symptom",
            "name" => "Swelling of temporal artery",
            "common_name" => "Swelling of temporal artery",
        ]);
        Symptom::create([
            "id" => "s_1145",
            "type" => "symptom",
            "name" => "Redness in temporal region",
            "common_name" => "Redness around the temple",
        ]);
        Symptom::create([
            "id" => "s_1146",
            "type" => "symptom",
            "name" => "Impaired vision on side with painful temple",
            "common_name" => "Impaired vision on side with painful temple",
        ]);
        Symptom::create([
            "id" => "s_1147",
            "type" => "symptom",
            "name" => "Oculomotor nerve palsy",
            "common_name" => "Oculomotor nerve palsy",
        ]);
        Symptom::create([
            "id" => "s_1148",
            "type" => "symptom",
            "name" => "Numbness of tongue",
            "common_name" => "Loss of feeling in tongue",
        ]);
        Symptom::create([
            "id" => "s_1150",
            "type" => "symptom",
            "name" => "Hypersensitivity to sound",
            "common_name" => "Oversensitivity to sound",
        ]);
        Symptom::create([
            "id" => "s_1153",
            "type" => "symptom",
            "name" => "Taste disorder in anterior two-thirds of tongue",
            "common_name" => "Taste disorder in anterior two-thirds of tongue",
        ]);
        Symptom::create([
            "id" => "s_1154",
            "type" => "symptom",
            "name" => "Difficulty completely closing eye",
            "common_name" => "Difficulty completely closing eye",
        ]);
        Symptom::create([
            "id" => "s_1156",
            "type" => "symptom",
            "name" => "Facial muscle paresis",
            "common_name" => "Facial muscle weakness",
        ]);
        Symptom::create([
            "id" => "s_1159",
            "type" => "symptom",
            "name" => "Loss of sensation of half of the face",
            "common_name" => "Loss of sensation on one side of the face",
        ]);
        Symptom::create([
            "id" => "s_1162",
            "type" => "symptom",
            "name" => "Pretibial myxedema",
            "common_name" => "Pretibial myxedema",
        ]);
        Symptom::create([
            "id" => "s_1163",
            "type" => "symptom",
            "name" => "Exophthalmos",
            "common_name" => "Protruding eye",
        ]);
        Symptom::create([
            "id" => "s_1165",
            "type" => "symptom",
            "name" => "Burning skin",
            "common_name" => "Burning sensation on skin",
        ]);
        Symptom::create([
            "id" => "s_1166",
            "type" => "symptom",
            "name" => "Enamel hypoplasia",
            "common_name" => "Enamel hypoplasia",
        ]);
        Symptom::create([
            "id" => "s_1167",
            "type" => "symptom",
            "name" => "Nail dystrophy",
            "common_name" => "Distortion or discolouration of nail",
        ]);
        Symptom::create([
            "id" => "s_1170",
            "type" => "symptom",
            "name" => "Hemarthrosis",
            "common_name" => "Bleeding into joints",
        ]);
        Symptom::create([
            "id" => "s_1171",
            "type" => "symptom",
            "name" => "Darier's sign",
            "common_name" => "Darier's sign",
        ]);
        Symptom::create([
            "id" => "s_1172",
            "type" => "symptom",
            "name" => "Fever, periodic",
            "common_name" => "Periodic fever",
        ]);
        Symptom::create([
            "id" => "s_1173",
            "type" => "symptom",
            "name" => "Lump in scrotum",
            "common_name" => "Lump in scrotum",
        ]);
        Symptom::create([
            "id" => "s_1175",
            "type" => "symptom",
            "name" => "Feeling of weight in scrotum",
            "common_name" => "Feeling of weight in scrotum",
        ]);
        Symptom::create([
            "id" => "s_1178",
            "type" => "symptom",
            "name" => "Chest pain, worsens on palpation",
            "common_name" => "Chest pain worsening when touching or pressing",
        ]);
        Symptom::create([
            "id" => "s_1180",
            "type" => "symptom",
            "name" => "Pain behind ear",
            "common_name" => "Pain behind ear",
        ]);
        Symptom::create([
            "id" => "s_1181",
            "type" => "symptom",
            "name" => "Redness behind the ear",
            "common_name" => "Redness behind the ear",
        ]);
        Symptom::create([
            "id" => "s_1182",
            "type" => "symptom",
            "name" => "Swelling in the mastoid region",
            "common_name" => "Swelling behind ear",
        ]);
        Symptom::create([
            "id" => "s_1183",
            "type" => "symptom",
            "name" => "Winterbottom's sign",
            "common_name" => "Winterbottom's sign",
        ]);
        Symptom::create([
            "id" => "s_1184",
            "type" => "symptom",
            "name" => "Coating on tongue",
            "common_name" => "Coating on tongue",
        ]);
        Symptom::create([
            "id" => "s_1185",
            "type" => "symptom",
            "name" => "Dyspnea, with flare-ups and remissions",
            "common_name" => "Shortness of breath that comes and goes",
        ]);
        Symptom::create([
            "id" => "s_1186",
            "type" => "symptom",
            "name" => "Fever with flare-ups and remissions",
            "common_name" => "Fever that comes and goes",
        ]);
        Symptom::create([
            "id" => "s_1189",
            "type" => "symptom",
            "name" => "Back pain, recurrent",
            "common_name" => "Back pain that comes and goes",
        ]);
        Symptom::create([
            "id" => "s_1190",
            "type" => "symptom",
            "name" => "Back pain",
            "common_name" => "Back pain",
        ]);
        Symptom::create([
            "id" => "s_1191",
            "type" => "symptom",
            "name" => "Dermatological changes, with flare-ups and remissions",
            "common_name" => "Skin changes that come and go",
        ]);
        Symptom::create([
            "id" => "s_1192",
            "type" => "symptom",
            "name" => "Back pain, severe",
            "common_name" => "Severe back pain",
        ]);
        Symptom::create([
            "id" => "s_1193",
            "type" => "symptom",
            "name" => "Headache, severe",
            "common_name" => "Severe headache",
        ]);
        Symptom::create([
            "id" => "s_1194",
            "type" => "symptom",
            "name" => "Facial pain, severe",
            "common_name" => "Severe face pain",
        ]);
        Symptom::create([
            "id" => "s_1195",
            "type" => "symptom",
            "name" => "Abdominal pain, severe",
            "common_name" => "Severe stomach pain",
        ]);
        Symptom::create([
            "id" => "s_1197",
            "type" => "symptom",
            "name" => "Chest pain, severe",
            "common_name" => "Severe chest pain",
        ]);
        Symptom::create([
            "id" => "s_1198",
            "type" => "symptom",
            "name" => "Back pain, sudden",
            "common_name" => "Sudden back pain",
        ]);
        Symptom::create([
            "id" => "s_1200",
            "type" => "symptom",
            "name" => "Chest pain, sudden",
            "common_name" => "Sudden chest pain",
        ]);
        Symptom::create([
            "id" => "s_1201",
            "type" => "symptom",
            "name" => "Joint pain, sudden",
            "common_name" => "Sudden joint pain",
        ]);
        Symptom::create([
            "id" => "s_1202",
            "type" => "symptom",
            "name" => "Abdominal pain, exacerbating during deep breath",
            "common_name" => "Stomach pain worsens with deep breath",
        ]);
        Symptom::create([
            "id" => "s_1203",
            "type" => "symptom",
            "name" => "Facial pain, longer than a couple of hours",
            "common_name" => "Face pain lasting longer than a couple of hours",
        ]);
        Symptom::create([
            "id" => "s_1205",
            "type" => "symptom",
            "name" => "Back pain, lasting several hours",
            "common_name" => "Back pain lasting several hours",
        ]);
        Symptom::create([
            "id" => "s_1206",
            "type" => "symptom",
            "name" => "Back pain, improves with rest",
            "common_name" => "Back pain decreases during rest",
        ]);
        Symptom::create([
            "id" => "s_1207",
            "type" => "symptom",
            "name" => "Abdominal pain, exacerbating after caffeine consumption",
            "common_name" =>
                "Stomach pain worsening after caffeine consumption",
        ]);
        Symptom::create([
            "id" => "s_1209",
            "type" => "symptom",
            "name" => "Skin pallor, sudden",
            "common_name" => "Sudden paleness of skin",
        ]);
        Symptom::create([
            "id" => "s_1210",
            "type" => "symptom",
            "name" => "Mucosal pallor",
            "common_name" => "Mucosal pallor",
        ]);
        Symptom::create([
            "id" => "s_1212",
            "type" => "symptom",
            "name" => "Conjunctival pallor",
            "common_name" => "Pale conjunctiva",
        ]);
        Symptom::create([
            "id" => "s_1213",
            "type" => "symptom",
            "name" => "Mucosal pallor, sudden",
            "common_name" => "Sudden paleness of mucous membranes",
        ]);
        Symptom::create([
            "id" => "s_1214",
            "type" => "symptom",
            "name" => "Conjunctival pallor, sudden",
            "common_name" => "Sudden paleness of conjunctiva",
        ]);
        Symptom::create([
            "id" => "s_1217",
            "type" => "symptom",
            "name" => "Nonmenstrual vaginal bleeding or spotting",
            "common_name" =>
                "Vaginal bleeding not associated with menstruation",
        ]);
        Symptom::create([
            "id" => "s_1226",
            "type" => "symptom",
            "name" => "Genu varum",
            "common_name" => "Bowlegs",
        ]);
        Symptom::create([
            "id" => "s_1227",
            "type" => "symptom",
            "name" => "Impaired lateral eye motion",
            "common_name" => "Difficulty looking sideways",
        ]);
        Symptom::create([
            "id" => "s_1228",
            "type" => "symptom",
            "name" => "Convergent strabismus",
            "common_name" => "Crossed eyes",
        ]);
        Symptom::create([
            "id" => "s_1229",
            "type" => "symptom",
            "name" => "Diplopia with horizontal image dispersion",
            "common_name" => "Double vision with images appearing side by side",
        ]);
        Symptom::create([
            "id" => "s_1230",
            "type" => "symptom",
            "name" => "Head tilt in order to avoid diplopia",
            "common_name" => "Double vision improves while tilting head",
        ]);
        Symptom::create([
            "id" => "s_1232",
            "type" => "symptom",
            "name" => "Diplopia while looking down and medially",
            "common_name" =>
                "Double vision while looking down and toward the nose",
        ]);
        Symptom::create([
            "id" => "s_1235",
            "type" => "symptom",
            "name" => "Diplopia while looking in any direction",
            "common_name" => "Double vision while looking in any direction",
        ]);
        Symptom::create([
            "id" => "s_1236",
            "type" => "symptom",
            "name" => "Divergent strabismus",
            "common_name" => "One or both eyes turning outward",
        ]);
        Symptom::create([
            "id" => "s_1237",
            "type" => "symptom",
            "name" => "Ocular bulb rotation laterally and downward",
            "common_name" => "Eye rotation sideways and downward",
        ]);
        Symptom::create([
            "id" => "s_1238",
            "type" => "symptom",
            "name" => "Pupil or pupils unreactive to accomodation",
            "common_name" => "Pupil or pupils unreactive to accomodation",
        ]);
        Symptom::create([
            "id" => "s_1239",
            "type" => "symptom",
            "name" => "Impaired upward eye motion",
            "common_name" => "Difficulty looking up",
        ]);
        Symptom::create([
            "id" => "s_1240",
            "type" => "symptom",
            "name" => "Impaired medial eye motion",
            "common_name" => "Difficulty looking towards the nose",
        ]);
        Symptom::create([
            "id" => "s_1241",
            "type" => "symptom",
            "name" => "Impaired downward eye motion",
            "common_name" => "Difficulty looking down",
        ]);
        Symptom::create([
            "id" => "s_1242",
            "type" => "symptom",
            "name" => "Soft lump in inguinal region",
            "common_name" => "Soft lump in groin",
        ]);
        Symptom::create([
            "id" => "s_1243",
            "type" => "symptom",
            "name" =>
                "Soft lump in inguinal region, enlarging during increase in abdominal pressure",
            "common_name" =>
                "Enlargement of groin lump during increase in abdominal pressure",
        ]);
        Symptom::create([
            "id" => "s_1244",
            "type" => "symptom",
            "name" => "Soft lump in inguinal region, decreasing while supine",
            "common_name" => "Decrease of groin mass size while lying down",
        ]);
        Symptom::create([
            "id" => "s_1245",
            "type" => "symptom",
            "name" => "Soft lump in inguinal region, reducible",
            "common_name" =>
                "Groin mass possible to be pushed back into abdomen manually",
        ]);
        Symptom::create([
            "id" => "s_1246",
            "type" => "symptom",
            "name" => "Hard lump in inguinal region",
            "common_name" => "Hard lump in groin",
        ]);
        Symptom::create([
            "id" => "s_1247",
            "type" => "symptom",
            "name" => "Hard lump in inguinal region, irreducible",
            "common_name" => "Lump in groin cannot be pushed back in groin",
        ]);
        Symptom::create([
            "id" => "s_1248",
            "type" => "symptom",
            "name" =>
                "Hard lump in inguinal region, dark or bluish discolouration",
            "common_name" => "Dark or bluish hard lump in groin",
        ]);
        Symptom::create([
            "id" => "s_1249",
            "type" => "symptom",
            "name" => "Hard lump in inguinal region, tender",
            "common_name" => "Painful hard lump in groin",
        ]);
        Symptom::create([
            "id" => "s_1250",
            "type" => "symptom",
            "name" =>
                "Pain in groin during coughing, sneezing, laughing, or physical exercises",
            "common_name" =>
                "Pain in groin during coughing, sneezing, laughing, or physical exercises",
        ]);
        Symptom::create([
            "id" => "s_1254",
            "type" => "symptom",
            "name" => "Gordon's sign",
            "common_name" => "Gordon's sign",
        ]);
        Symptom::create([
            "id" => "s_1255",
            "type" => "symptom",
            "name" => "Rossolimo's sign",
            "common_name" => "Rossolimo's sign",
        ]);
        Symptom::create([
            "id" => "s_1256",
            "type" => "symptom",
            "name" => "Oppenheim's sign",
            "common_name" => "Oppenheim's sign",
        ]);
        Symptom::create([
            "id" => "s_1257",
            "type" => "symptom",
            "name" => "Bing's sign",
            "common_name" => "Bing's sign",
        ]);
        Symptom::create([
            "id" => "s_1258",
            "type" => "symptom",
            "name" => "Chaddock's sign",
            "common_name" => "Chaddock's sign",
        ]);
        Symptom::create([
            "id" => "s_1259",
            "type" => "symptom",
            "name" => "Schaeffer's sign",
            "common_name" => "Schaeffer's sign",
        ]);
        Symptom::create([
            "id" => "s_1260",
            "type" => "symptom",
            "name" => "Stransky's sign",
            "common_name" => "Stransky's sign",
        ]);
        Symptom::create([
            "id" => "s_1261",
            "type" => "symptom",
            "name" => "Mendel-Bekhterev sign",
            "common_name" => "Mendel-Bekhterev sign",
        ]);
        Symptom::create([
            "id" => "s_1262",
            "type" => "symptom",
            "name" => "Tromner's sign",
            "common_name" => "Tromner's sign",
        ]);
        Symptom::create([
            "id" => "s_1263",
            "type" => "symptom",
            "name" => "Gonda-Allen sign",
            "common_name" => "Gonda-Allen sign",
        ]);
        Symptom::create([
            "id" => "s_1264",
            "type" => "symptom",
            "name" => "Tremors, intention",
            "common_name" => "Intention tremors",
        ]);
        Symptom::create([
            "id" => "s_1265",
            "type" => "symptom",
            "name" => "Dissociated sensory loss",
            "common_name" => "Dissociated sensory loss",
        ]);
        Symptom::create([
            "id" => "s_1268",
            "type" => "symptom",
            "name" => "Corneal reflex weak or absent",
            "common_name" => "Corneal reflex weak or absent",
        ]);
        Symptom::create([
            "id" => "s_1270",
            "type" => "symptom",
            "name" => "Sterling's sign",
            "common_name" => "Sterling's sign",
        ]);
        Symptom::create([
            "id" => "s_1271",
            "type" => "symptom",
            "name" => "Jacobsohn sign",
            "common_name" =>
                "Finger flexion when tapping distal base of radius bone",
        ]);
        Symptom::create([
            "id" => "s_1272",
            "type" => "symptom",
            "name" => "Allen-Cleckley sign",
            "common_name" => "Allen-Cleckley sign",
        ]);
        Symptom::create([
            "id" => "s_1273",
            "type" => "symptom",
            "name" => "Cornell's sign",
            "common_name" => "Cornell's sign",
        ]);
        Symptom::create([
            "id" => "s_1274",
            "type" => "symptom",
            "name" => "Moniz sign",
            "common_name" => "Moniz sign",
        ]);
        Symptom::create([
            "id" => "s_1275",
            "type" => "symptom",
            "name" => "Strumpell's sign",
            "common_name" => "Strumpell's sign",
        ]);
        Symptom::create([
            "id" => "s_1277",
            "type" => "symptom",
            "name" => "Decreased tongue motility",
            "common_name" => "Difficulty moving tongue",
        ]);
        Symptom::create([
            "id" => "s_1278",
            "type" => "symptom",
            "name" => "Increased palatine reflex",
            "common_name" => "Increased palatine reflex",
        ]);
        Symptom::create([
            "id" => "s_1279",
            "type" => "symptom",
            "name" => "Increased pharyngeal reflex",
            "common_name" => "Increased pharyngeal reflex",
        ]);
        Symptom::create([
            "id" => "s_1280",
            "type" => "symptom",
            "name" => "Weak or absent pharyngeal reflex",
            "common_name" => "Weak or absent pharyngeal reflex",
        ]);
        Symptom::create([
            "id" => "s_1281",
            "type" => "symptom",
            "name" => "Clasp-knife spasticity",
            "common_name" => "Clasp-knife spasticity",
        ]);
        Symptom::create([
            "id" => "s_1282",
            "type" => "symptom",
            "name" => "Lead-pipe rigidity",
            "common_name" => "Constant muscle stiffness in a limb",
        ]);
        Symptom::create([
            "id" => "s_1283",
            "type" => "symptom",
            "name" => "Cogwheel muscle rigidity",
            "common_name" => "Cogwheel muscle rigidity",
        ]);
        Symptom::create([
            "id" => "s_1285",
            "type" => "symptom",
            "name" =>
                "Sagging of the palate ipsilateral to suspected nerve damage",
            "common_name" =>
                "Sagging of the palate ipsilateral to suspected nerve damage",
        ]);
        Symptom::create([
            "id" => "s_1287",
            "type" => "symptom",
            "name" => "Uvula deviation towards unaffected side",
            "common_name" => "Uvula deviation towards unaffected side",
        ]);
        Symptom::create([
            "id" => "s_1289",
            "type" => "symptom",
            "name" => "Ovarian enlargement",
            "common_name" => "Ovarian enlargement",
        ]);
        Symptom::create([
            "id" => "s_1291",
            "type" => "symptom",
            "name" => "Bilateral muscle paralysis",
            "common_name" => "Bilateral muscle paralysis",
        ]);
        Symptom::create([
            "id" => "s_1295",
            "type" => "symptom",
            "name" => "Hiccups",
            "common_name" => "Hiccups",
        ]);
        Symptom::create([
            "id" => "s_1297",
            "type" => "symptom",
            "name" => "Motor retardation",
            "common_name" => "Slowed movements",
        ]);
        Symptom::create([
            "id" => "s_1298",
            "type" => "symptom",
            "name" => "Dystonia",
            "common_name" => "Dystonia",
        ]);
        Symptom::create([
            "id" => "s_1300",
            "type" => "symptom",
            "name" => "Inability to move mandible sideways",
            "common_name" => "Inability to move mandible sideways",
        ]);
        Symptom::create([
            "id" => "s_1302",
            "type" => "symptom",
            "name" => "Goldflam's sign",
            "common_name" => "Goldflam's sign",
        ]);
        Symptom::create([
            "id" => "s_1303",
            "type" => "symptom",
            "name" => "Nasal speech",
            "common_name" => "Nasal voice",
        ]);
        Symptom::create([
            "id" => "s_1304",
            "type" => "symptom",
            "name" => "Excessive saliva production",
            "common_name" => "Excessive salivation",
        ]);
        Symptom::create([
            "id" => "s_1310",
            "type" => "symptom",
            "name" => "Brown nail discolouration",
            "common_name" => "Brown nail discolouration",
        ]);
        Symptom::create([
            "id" => "s_1311",
            "type" => "symptom",
            "name" => "Edema, finger",
            "common_name" => "Swollen finger",
        ]);
        Symptom::create([
            "id" => "s_1312",
            "type" => "symptom",
            "name" => "Perionychial pain",
            "common_name" => "Pain of the skin around the nail",
        ]);
        Symptom::create([
            "id" => "s_1313",
            "type" => "symptom",
            "name" => "Pain in one finger",
            "common_name" => "One finger pain",
        ]);
        Symptom::create([
            "id" => "s_1314",
            "type" => "symptom",
            "name" => "Erythema, finger",
            "common_name" => "Red finger",
        ]);
        Symptom::create([
            "id" => "s_1315",
            "type" => "symptom",
            "name" => "Pus under the skin of the finger",
            "common_name" => "Pus under the skin of the finger",
        ]);
        Symptom::create([
            "id" => "s_1316",
            "type" => "symptom",
            "name" => "Auscultative rhonchi over the thorax",
            "common_name" => "Auscultative rhonchi over the thorax",
        ]);
        Symptom::create([
            "id" => "s_1317",
            "type" => "symptom",
            "name" => "Dyspnea, paroxysmal nocturnal",
            "common_name" => "Shortness of breath while sleeping",
        ]);
        Symptom::create([
            "id" => "s_1318",
            "type" => "symptom",
            "name" => "Vesicular exanthema of mouth or ear",
            "common_name" => "Blisters around mouth or ear",
        ]);
        Symptom::create([
            "id" => "s_1322",
            "type" => "symptom",
            "name" => "Axillary or inguinal freckles",
            "common_name" => "Freckles in the groins or armpits",
        ]);
        Symptom::create([
            "id" => "s_1323",
            "type" => "symptom",
            "name" => "Presence of neurofibromas",
            "common_name" => "Presence of neurofibromas",
        ]);
        Symptom::create([
            "id" => "s_1324",
            "type" => "symptom",
            "name" => "Lisch nodules",
            "common_name" => "Lisch nodules",
        ]);
        Symptom::create([
            "id" => "s_1328",
            "type" => "symptom",
            "name" => "Colour vision deficiency",
            "common_name" => "Colour blind",
        ]);
        Symptom::create([
            "id" => "s_1329",
            "type" => "symptom",
            "name" => "Optic nerve disc pallor",
            "common_name" => "Optic nerve disc pallor",
        ]);
        Symptom::create([
            "id" => "s_1330",
            "type" => "symptom",
            "name" => "Café au lait macules",
            "common_name" => "At least six light brown marks on skin",
        ]);
        Symptom::create([
            "id" => "s_1332",
            "type" => "symptom",
            "name" => "Weakness exacerbates after exercise",
            "common_name" => "Weakness worsening after exercise",
        ]);
        Symptom::create([
            "id" => "s_1338",
            "type" => "symptom",
            "name" => "Damage to 2 separate areas of innervation",
            "common_name" => "Damage to 2 separate areas of innervation",
        ]);
        Symptom::create([
            "id" => "s_1340",
            "type" => "symptom",
            "name" => "Westphal's sign",
            "common_name" => "Westphal's sign",
        ]);
        Symptom::create([
            "id" => "s_1342",
            "type" => "symptom",
            "name" => "Scrotal transillumination",
            "common_name" => "Scrotal transillumination",
        ]);
        Symptom::create([
            "id" => "s_1344",
            "type" => "symptom",
            "name" => "Retinal hemorrhage",
            "common_name" => "Retinal hemorrhage",
        ]);
        Symptom::create([
            "id" => "s_1345",
            "type" => "symptom",
            "name" => "Confusion, after trauma",
            "common_name" => "Confusion after an injury",
        ]);
        Symptom::create([
            "id" => "s_1346",
            "type" => "symptom",
            "name" => "Hard retinal exudates",
            "common_name" => "Hard retinal exudates",
        ]);
        Symptom::create([
            "id" => "s_1347",
            "type" => "symptom",
            "name" => "Soft retinal exudates",
            "common_name" => "Soft retinal exudates",
        ]);
        Symptom::create([
            "id" => "s_1348",
            "type" => "symptom",
            "name" => "Weak peripheral pulses",
            "common_name" => "Weak peripheral pulses",
        ]);
        Symptom::create([
            "id" => "s_1349",
            "type" => "symptom",
            "name" => "Headache, forehead",
            "common_name" => "Headache located near the forehead",
        ]);
        Symptom::create([
            "id" => "s_1365",
            "type" => "symptom",
            "name" => "Vomiting, more often in the morning",
            "common_name" => "Vomiting more often in the morning",
        ]);
        Symptom::create([
            "id" => "s_1367",
            "type" => "symptom",
            "name" => "Pharyngeal erythema",
            "common_name" => "Red throat",
        ]);
        Symptom::create([
            "id" => "s_1369",
            "type" => "symptom",
            "name" => "Abdominal pain, sharp and stabbing",
            "common_name" => "Sharp and stabbing stomach pain",
        ]);
        Symptom::create([
            "id" => "s_1370",
            "type" => "symptom",
            "name" => "Amenorrhea, secondary, 12 months or more",
            "common_name" => "Absence of menstrual period for 1 year or more",
        ]);
        Symptom::create([
            "id" => "s_1371",
            "type" => "symptom",
            "name" => "Palatine petechiae",
            "common_name" => "Pin-point spots on the soft palate",
        ]);
        Symptom::create([
            "id" => "s_1376",
            "type" => "symptom",
            "name" => "Diarrhea, rice water",
            "common_name" => "Diarrhea that looks like rice water",
        ]);
        Symptom::create([
            "id" => "s_1377",
            "type" => "symptom",
            "name" => "Rose spots on lower chest and abdomen",
            "common_name" => "Rose spots on lower chest and abdomen",
        ]);
        Symptom::create([
            "id" => "s_1378",
            "type" => "symptom",
            "name" => "Levine's sign",
            "common_name" => "Levine's sign",
        ]);
        Symptom::create([
            "id" => "s_1379",
            "type" => "symptom",
            "name" => "Pill-rolling tremor",
            "common_name" => "Pill-rolling tremor",
        ]);
        Symptom::create([
            "id" => "s_1380",
            "type" => "symptom",
            "name" => "Pericardial friction rub",
            "common_name" => "Pericardial friction rub",
        ]);
        Symptom::create([
            "id" => "s_1381",
            "type" => "symptom",
            "name" => "Sternal rub",
            "common_name" => "Sternal rub",
        ]);
        Symptom::create([
            "id" => "s_1382",
            "type" => "symptom",
            "name" => "Pain caused by firm pressure on tibia",
            "common_name" => "Pain caused by firm pressure on tibia",
        ]);
        Symptom::create([
            "id" => "s_1383",
            "type" => "symptom",
            "name" => "Intense, non-committal relationships",
            "common_name" => "Intense, non-committal relationships",
        ]);
        Symptom::create([
            "id" => "s_1384",
            "type" => "symptom",
            "name" => "Impulsive behavior",
            "common_name" => "Impulsive behavior",
        ]);
        Symptom::create([
            "id" => "s_1385",
            "type" => "symptom",
            "name" => "Inability to complete tasks",
            "common_name" => "Inability to complete tasks",
        ]);
        Symptom::create([
            "id" => "s_1386",
            "type" => "symptom",
            "name" => "Bleeding into muscles",
            "common_name" => "Bleeding into muscles",
        ]);
        Symptom::create([
            "id" => "s_1387",
            "type" => "symptom",
            "name" => "Abdominal pain, epigastric",
            "common_name" => "Upper central stomach pain",
        ]);
        Symptom::create([
            "id" => "s_1388",
            "type" => "symptom",
            "name" => "Neck asymmetry",
            "common_name" => "Asymmetrical neck",
        ]);
        Symptom::create([
            "id" => "s_1390",
            "type" => "symptom",
            "name" => "Pharyngeal swelling, unilateral",
            "common_name" => "One-sided throat swelling",
        ]);
        Symptom::create([
            "id" => "s_1392",
            "type" => "symptom",
            "name" => "Abdominal tenderness, right upper quadrant",
            "common_name" =>
                "Pain when pressing upper right part of the stomach",
        ]);
        Symptom::create([
            "id" => "s_1393",
            "type" => "symptom",
            "name" => "Painful defecation",
            "common_name" => "Painful bowel movements",
        ]);
        Symptom::create([
            "id" => "s_1394",
            "type" => "symptom",
            "name" => "Loss of the lingual papillae",
            "common_name" => "Loss of taste buds",
        ]);
        Symptom::create([
            "id" => "s_1395",
            "type" => "symptom",
            "name" =>
                "Decreased intensity of breath sounds, right basilar lung zones",
            "common_name" =>
                "Decreased intensity of breath sounds, right basilar lung zones",
        ]);
        Symptom::create([
            "id" => "s_1396",
            "type" => "symptom",
            "name" => "Pleural friction rub",
            "common_name" => "Pleural friction rub",
        ]);
        Symptom::create([
            "id" => "s_1397",
            "type" => "symptom",
            "name" => "Priapism",
            "common_name" => "Prolonged erection",
        ]);
        Symptom::create([
            "id" => "s_1398",
            "type" => "symptom",
            "name" => "Vitreous hemorrhage",
            "common_name" => "Vitreous hemorrhage",
        ]);
        Symptom::create([
            "id" => "s_1399",
            "type" => "symptom",
            "name" => "Shafer's sign",
            "common_name" => "Shafer's sign",
        ]);
        Symptom::create([
            "id" => "s_1400",
            "type" => "symptom",
            "name" => "Abdominal tenderness, suprapubic",
            "common_name" => "Pain when pressing lower part of the stomach",
        ]);
        Symptom::create([
            "id" => "s_1402",
            "type" => "symptom",
            "name" => "Weiss ring",
            "common_name" => "Weiss ring",
        ]);
        Symptom::create([
            "id" => "s_1403",
            "type" => "symptom",
            "name" => "Marcus Gunn pupil",
            "common_name" => "Marcus Gunn pupil",
        ]);
        Symptom::create([
            "id" => "s_1404",
            "type" => "symptom",
            "name" =>
                "Lower intraocular pressure, i.e., > 4-5mmHg, in affected eye compared to unaffected eye",
            "common_name" =>
                "Lower intraocular pressure, i.e., > 4-5mmHg, in affected eye compared to unaffected eye",
        ]);
        Symptom::create([
            "id" => "s_1405",
            "type" => "symptom",
            "name" => "Local elevation of retina",
            "common_name" => "Local elevation of retina",
        ]);
        Symptom::create([
            "id" => "s_1406",
            "type" => "symptom",
            "name" => "Local grey discolouration of retina",
            "common_name" => "Local grey discolouration of retina",
        ]);
        Symptom::create([
            "id" => "s_1407",
            "type" => "symptom",
            "name" => "Local dark retinal blood vessels that lie in folds",
            "common_name" =>
                "Local dark retinal blood vessels that lie in folds",
        ]);
        Symptom::create([
            "id" => "s_1408",
            "type" => "symptom",
            "name" => "Local retinal undulation",
            "common_name" => "Local retinal undulation",
        ]);
        Symptom::create([
            "id" => "s_1409",
            "type" => "symptom",
            "name" =>
                "Demarcation of retinal detachment (pigmented or nonpigmented)",
            "common_name" =>
                "Demarcation of retinal detachment (pigmented or nonpigmented)",
        ]);
        Symptom::create([
            "id" => "s_1410",
            "type" => "symptom",
            "name" => "Optic disc neovascularization",
            "common_name" => "Optic disc neovascularization",
        ]);
        Symptom::create([
            "id" => "s_1411",
            "type" => "symptom",
            "name" => "Iris neovascularization",
            "common_name" => "Iris neovascularization",
        ]);
        Symptom::create([
            "id" => "s_1412",
            "type" => "symptom",
            "name" => "Retinal microaneurysms",
            "common_name" => "Retinal microaneurysms",
        ]);
        Symptom::create([
            "id" => "s_1413",
            "type" => "symptom",
            "name" => "Cystoid macular edema",
            "common_name" => "Cystoid macular edema",
        ]);
        Symptom::create([
            "id" => "s_1414",
            "type" => "symptom",
            "name" => "Retinal swelling",
            "common_name" => "Retinal swelling",
        ]);
        Symptom::create([
            "id" => "s_1415",
            "type" => "symptom",
            "name" => "Retinal neovascularization elsewhere",
            "common_name" => "Retinal neovascularization elsewhere",
        ]);
        Symptom::create([
            "id" => "s_1416",
            "type" => "symptom",
            "name" => "Intraretinal microvascular abnormalities",
            "common_name" => "Intraretinal microvascular abnormalities",
        ]);
        Symptom::create([
            "id" => "s_1417",
            "type" => "symptom",
            "name" => "Dark-red spots in optic disc vessels",
            "common_name" => "Dark-red spots in optic disc vessels",
        ]);
        Symptom::create([
            "id" => "s_1418",
            "type" => "symptom",
            "name" => "Retinal artery occlusions",
            "common_name" => "Retinal artery occlusions",
        ]);
        Symptom::create([
            "id" => "s_1421",
            "type" => "symptom",
            "name" => "Tremors, flapping",
            "common_name" => "Flapping tremors",
        ]);
        Symptom::create([
            "id" => "s_1422",
            "type" => "symptom",
            "name" => "Nipple discharge",
            "common_name" => "Leaking from the nipple",
        ]);
        Symptom::create([
            "id" => "s_1425",
            "type" => "symptom",
            "name" => "Facial muscle spasms",
            "common_name" => "Facial muscle spasms",
        ]);
        Symptom::create([
            "id" => "s_1426",
            "type" => "symptom",
            "name" => "Spasms in upper extremities",
            "common_name" => "Spasms in upper extremities",
        ]);
        Symptom::create([
            "id" => "s_1429",
            "type" => "symptom",
            "name" => "Nosebleeds",
            "common_name" => "Bleeding from nose",
        ]);
        Symptom::create([
            "id" => "s_1430",
            "type" => "symptom",
            "name" => "Joint pain, wrist",
            "common_name" => "Wrist pain",
        ]);
        Symptom::create([
            "id" => "s_1431",
            "type" => "symptom",
            "name" => "Edema, wrist joint",
            "common_name" => "Swollen wrist",
        ]);
        Symptom::create([
            "id" => "s_1432",
            "type" => "symptom",
            "name" => "Dyspepsia",
            "common_name" => "Indigestion",
        ]);
        Symptom::create([
            "id" => "s_1433",
            "type" => "symptom",
            "name" => "Edema, lip",
            "common_name" => "Swollen lips",
        ]);
        Symptom::create([
            "id" => "s_1434",
            "type" => "symptom",
            "name" => "Steatorrhea",
            "common_name" => "Fatty stools",
        ]);
        Symptom::create([
            "id" => "s_1436",
            "type" => "symptom",
            "name" => "Facial pain, paranasal sinus",
            "common_name" => "Sinus pain or pressure",
        ]);
        Symptom::create([
            "id" => "s_1437",
            "type" => "symptom",
            "name" => "Pleural effusion",
            "common_name" => "Pleural effusion",
        ]);
        Symptom::create([
            "id" => "s_1440",
            "type" => "symptom",
            "name" => "Irregular menstruations",
            "common_name" => "Irregular periods",
        ]);
        Symptom::create([
            "id" => "s_1442",
            "type" => "symptom",
            "name" => "Edema, periorbital",
            "common_name" => "Swelling around the eyes",
        ]);
        Symptom::create([
            "id" => "s_1447",
            "type" => "symptom",
            "name" => "Edema, upper limb",
            "common_name" => "Swelling of the upper limb",
        ]);
        Symptom::create([
            "id" => "s_1449",
            "type" => "symptom",
            "name" => "Paresthesia, one upper limb",
            "common_name" => "Numbness of one upper limb",
        ]);
        Symptom::create([
            "id" => "s_1451",
            "type" => "symptom",
            "name" => "Kussmaul breathing",
            "common_name" => "Abnormally deep, labored and gasping breathing",
        ]);
        Symptom::create([
            "id" => "s_1452",
            "type" => "symptom",
            "name" => "Pain in both upper limbs",
            "common_name" => "Pain in both upper limbs",
        ]);
        Symptom::create([
            "id" => "s_1453",
            "type" => "symptom",
            "name" => "Pain in both lower limbs",
            "common_name" => "Pain in both lower limbs",
        ]);
        Symptom::create([
            "id" => "s_1454",
            "type" => "symptom",
            "name" => "Tremors, kinetic",
            "common_name" => "Trembling during movement",
        ]);
        Symptom::create([
            "id" => "s_1455",
            "type" => "symptom",
            "name" => "Tremors, resting",
            "common_name" => "Trembling at rest",
        ]);
        Symptom::create([
            "id" => "s_1456",
            "type" => "symptom",
            "name" => "Chorea",
            "common_name" => "Chorea",
        ]);
        Symptom::create([
            "id" => "s_1457",
            "type" => "symptom",
            "name" => "Amenorrhea, secondary",
            "common_name" =>
                "Absence of menstrual period for more than 3 months",
        ]);
        Symptom::create([
            "id" => "s_1458",
            "type" => "symptom",
            "name" => "Amenorrhea, primary",
            "common_name" => "Absence of first menstrual period at age 16",
        ]);
        Symptom::create([
            "id" => "s_1462",
            "type" => "symptom",
            "name" => "Shallow breathing",
            "common_name" => "Shallow breathing",
        ]);
        Symptom::create([
            "id" => "s_1464",
            "type" => "symptom",
            "name" => "Edema, one hand",
            "common_name" => "Swollen hand",
        ]);
        Symptom::create([
            "id" => "s_1465",
            "type" => "symptom",
            "name" => "Temporary blindness",
            "common_name" => "Temporary blindness",
        ]);
        Symptom::create([
            "id" => "s_1466",
            "type" => "symptom",
            "name" => "Tinnitus, pulsatile",
            "common_name" => "Pulsing sound in ears",
        ]);
        Symptom::create([
            "id" => "s_1467",
            "type" => "symptom",
            "name" => "Strawberry tongue",
            "common_name" => "Strawberry tongue",
        ]);
        Symptom::create([
            "id" => "s_1468",
            "type" => "symptom",
            "name" => "Erythema, facial",
            "common_name" => "Red skin on face",
        ]);
        Symptom::create([
            "id" => "s_1469",
            "type" => "symptom",
            "name" => "Erythema and scaling on large portion of body",
            "common_name" => "Redness and scaling on almost the entire body",
        ]);
        Symptom::create([
            "id" => "s_1470",
            "type" => "symptom",
            "name" => "Skin desquamation",
            "common_name" => "Skin shedding",
        ]);
        Symptom::create([
            "id" => "s_1471",
            "type" => "symptom",
            "name" => "Postnasal drip",
            "common_name" => "Mucus dripping at the back of the throat",
        ]);
        Symptom::create([
            "id" => "s_1472",
            "type" => "symptom",
            "name" => "Kayser–Fleischer ring",
            "common_name" => "Dark rings appearing around the iris of the eye",
        ]);
        Symptom::create([
            "id" => "s_1474",
            "type" => "symptom",
            "name" => "Skull lesions",
            "common_name" => "Skull lesions",
        ]);
        Symptom::create([
            "id" => "s_1476",
            "type" => "symptom",
            "name" => "Myringitis",
            "common_name" => "Myringitis",
        ]);
        Symptom::create([
            "id" => "s_1479",
            "type" => "symptom",
            "name" => "Dizziness, head rotation",
            "common_name" => "Dizziness while turning the head",
        ]);
        Symptom::create([
            "id" => "s_1480",
            "type" => "symptom",
            "name" => "Breast pain or tenderness, bilateral",
            "common_name" => "Pain in both breasts when pressed",
        ]);
        Symptom::create([
            "id" => "s_1481",
            "type" => "symptom",
            "name" => "Hyperalgesia",
            "common_name" => "Hyperalgesia",
        ]);
        Symptom::create([
            "id" => "s_1483",
            "type" => "symptom",
            "name" => "Neck pain",
            "common_name" => "Neck pain",
        ]);
        Symptom::create([
            "id" => "s_1484",
            "type" => "symptom",
            "name" => "Decreased hearing, progressive hearing loss",
            "common_name" => "Progressive hearing loss without fluctuation",
        ]);
        Symptom::create([
            "id" => "s_1486",
            "type" => "symptom",
            "name" => "Paraspinal muscle tenderness",
            "common_name" => "Paraspinal muscle tenderness",
        ]);
        Symptom::create([
            "id" => "s_1488",
            "type" => "symptom",
            "name" => "Increased expiratory phase",
            "common_name" => "Increased expiratory phase",
        ]);
        Symptom::create([
            "id" => "s_1492",
            "type" => "symptom",
            "name" => "Scleral icterus",
            "common_name" => "Yellow eyes",
        ]);
        Symptom::create([
            "id" => "s_1494",
            "type" => "symptom",
            "name" => "Rebound tenderness",
            "common_name" => "Rebound tenderness",
        ]);
        Symptom::create([
            "id" => "s_1496",
            "type" => "symptom",
            "name" => "Paranasal sinuses tender to palpation",
            "common_name" => "Paranasal sinuses tender to palpation",
        ]);
        Symptom::create([
            "id" => "s_1498",
            "type" => "symptom",
            "name" => "Erythematous tonsils",
            "common_name" => "Unusually red tonsils",
        ]);
        Symptom::create([
            "id" => "s_1502",
            "type" => "symptom",
            "name" => "Achilles tendon hyperreflexia",
            "common_name" => "Achilles tendon hyperreflexia",
        ]);
        Symptom::create([
            "id" => "s_1509",
            "type" => "symptom",
            "name" => "Chest pain, substernal",
            "common_name" => "Chest pain behind breastbone",
        ]);
        Symptom::create([
            "id" => "s_1510",
            "type" => "symptom",
            "name" => "Dermatological changes, hot to the touch",
            "common_name" => "Skin change hot to the touch",
        ]);
        Symptom::create([
            "id" => "s_1514",
            "type" => "symptom",
            "name" => "Abdominal tenderness",
            "common_name" => "Pain when pressing the stomach",
        ]);
        Symptom::create([
            "id" => "s_1528",
            "type" => "symptom",
            "name" => "Abdominal pain, right upper quadrant",
            "common_name" => "Upper right side stomach pain",
        ]);
        Symptom::create([
            "id" => "s_1531",
            "type" => "symptom",
            "name" => "Abdominal pain, right lower quadrant",
            "common_name" => "Lower right side stomach pain",
        ]);
        Symptom::create([
            "id" => "s_1532",
            "type" => "symptom",
            "name" => "Abdominal pain, periumbilical",
            "common_name" => "Central stomach pain",
        ]);
        Symptom::create([
            "id" => "s_1533",
            "type" => "symptom",
            "name" => "Rhinitis triggered by environment",
            "common_name" => "Runny or stuffed nose triggered by environment",
        ]);
        Symptom::create([
            "id" => "s_1534",
            "type" => "symptom",
            "name" => "Tonsil stones",
            "common_name" => "White or yellow formations in tonsils",
        ]);
        Symptom::create([
            "id" => "s_1535",
            "type" => "symptom",
            "name" => "Headache, chronic",
            "common_name" => "Headaches history longer than 3 months",
        ]);
        Symptom::create([
            "id" => "s_1536",
            "type" => "symptom",
            "name" => "Spine asymmetry",
            "common_name" => "Spine asymmetry",
        ]);
        Symptom::create([
            "id" => "s_1538",
            "type" => "symptom",
            "name" => "Decreased hearing, sudden hearing loss",
            "common_name" => "Sudden hearing loss without obvious cause",
        ]);
        Symptom::create([
            "id" => "s_1543",
            "type" => "symptom",
            "name" => "Loss of consciousness",
            "common_name" => "Loss of consciousness",
        ]);
        Symptom::create([
            "id" => "s_1544",
            "type" => "symptom",
            "name" => "Scarlet fever rash",
            "common_name" => "Scarlet fever rash",
        ]);
        Symptom::create([
            "id" => "s_1546",
            "type" => "symptom",
            "name" => "Cheyne-Stokes respiration",
            "common_name" => "Cheyne-Stokes respiration",
        ]);
        Symptom::create([
            "id" => "s_1547",
            "type" => "symptom",
            "name" => "Fatigue, more than 6 months",
            "common_name" => "Fatigue lasting more than 6 months",
        ]);
        Symptom::create([
            "id" => "s_1548",
            "type" => "symptom",
            "name" => "Pseudomembrane in throat or nose",
            "common_name" => "Gray layer in throat",
        ]);
        Symptom::create([
            "id" => "s_1551",
            "type" => "symptom",
            "name" => "Inability to pass flatus",
            "common_name" => "Inability to pass gas",
        ]);
        Symptom::create([
            "id" => "s_1552",
            "type" => "symptom",
            "name" => "Bowel sounds, hyperactive, high-pitched",
            "common_name" => "Excessive bowel sounds",
        ]);
        Symptom::create([
            "id" => "s_1553",
            "type" => "symptom",
            "name" => "Bowel sounds, decreased",
            "common_name" => "Decreased bowel sounds",
        ]);
        Symptom::create([
            "id" => "s_1555",
            "type" => "symptom",
            "name" => "Dance's sign",
            "common_name" => "Dance's sign",
        ]);
        Symptom::create([
            "id" => "s_1557",
            "type" => "symptom",
            "name" => "Abdominal pain, diffuse",
            "common_name" => "Widespread stomach pain",
        ]);
        Symptom::create([
            "id" => "s_1558",
            "type" => "symptom",
            "name" => "Abdominal guarding",
            "common_name" => "Abdominal guarding",
        ]);
        Symptom::create([
            "id" => "s_1561",
            "type" => "symptom",
            "name" => "Xanthoma",
            "common_name" => "Yellowish deposits under skin",
        ]);
        Symptom::create([
            "id" => "s_1562",
            "type" => "symptom",
            "name" => "Stridor",
            "common_name" => "Stridor",
        ]);
        Symptom::create([
            "id" => "s_1563",
            "type" => "symptom",
            "name" => "Itching of eyes",
            "common_name" => "Itching of eyes",
        ]);
        Symptom::create([
            "id" => "s_1565",
            "type" => "symptom",
            "name" => "Feeling of rectal fullness",
            "common_name" => "Feeling of rectal fullness",
        ]);
        Symptom::create([
            "id" => "s_1569",
            "type" => "symptom",
            "name" => "Vaginal discharge, white and clumpy",
            "common_name" => "Vaginal discharge, white and clumpy",
        ]);
        Symptom::create([
            "id" => "s_1570",
            "type" => "symptom",
            "name" => "Gastric symptoms, after lactose ingestion",
            "common_name" =>
                "Gastric symptoms after eating or drinking foods containing lactose",
        ]);
        Symptom::create([
            "id" => "s_1571",
            "type" => "symptom",
            "name" => "Dermatological changes, painful",
            "common_name" => "Painful skin changes",
        ]);
        Symptom::create([
            "id" => "s_1574",
            "type" => "symptom",
            "name" => "Difficulty achieving orgasm",
            "common_name" => "Difficulty achieving orgasm",
        ]);
        Symptom::create([
            "id" => "s_1576",
            "type" => "symptom",
            "name" => "Carotid bruit",
            "common_name" => "Cervical artery murmur",
        ]);
        Symptom::create([
            "id" => "s_1577",
            "type" => "symptom",
            "name" => "Discharge from ear, bloody",
            "common_name" => "Bleeding from ear",
        ]);
        Symptom::create([
            "id" => "s_1580",
            "type" => "symptom",
            "name" =>
                "Chest pain, worsens on palpation of costochondral joints",
            "common_name" =>
                "Chest pain worsening on palpation of costochondral joints",
        ]);
        Symptom::create([
            "id" => "s_1581",
            "type" => "symptom",
            "name" => "Edema, costochondral junctions",
            "common_name" => "Swelling in the middle of the chest",
        ]);
        Symptom::create([
            "id" => "s_1586",
            "type" => "symptom",
            "name" => "Unilateral vulval swelling",
            "common_name" => "Labial swelling on one side",
        ]);
        Symptom::create([
            "id" => "s_1587",
            "type" => "symptom",
            "name" => "Depersonalization",
            "common_name" => "Feeling detached from own body",
        ]);
        Symptom::create([
            "id" => "s_1589",
            "type" => "symptom",
            "name" => "Abdominal tenderness, left upper quadrant",
            "common_name" =>
                "Pain when pressing upper left part of the stomach",
        ]);
        Symptom::create([
            "id" => "s_1591",
            "type" => "symptom",
            "name" => "Abdominal pain, left upper quadrant",
            "common_name" => "Upper left side stomach pain",
        ]);
        Symptom::create([
            "id" => "s_1598",
            "type" => "symptom",
            "name" => "Abdominal pain, below belly button",
            "common_name" => "Lower stomach pain",
        ]);
        Symptom::create([
            "id" => "s_1601",
            "type" => "symptom",
            "name" => "Chest pain, stabbing",
            "common_name" => "Stabbing chest pain",
        ]);
        Symptom::create([
            "id" => "s_1602",
            "type" => "symptom",
            "name" =>
                "Dermatological changes, located in genital area, chancre",
            "common_name" => "Painless genital ulcer",
        ]);
        Symptom::create([
            "id" => "s_1603",
            "type" => "symptom",
            "name" => "Delayed speech or language development",
            "common_name" => "Delayed speech or language development",
        ]);
        Symptom::create([
            "id" => "s_1605",
            "type" => "symptom",
            "name" => "Nose pain",
            "common_name" => "Nose pain",
        ]);
        Symptom::create([
            "id" => "s_1610",
            "type" => "symptom",
            "name" => "Joint pain, during knee movement",
            "common_name" => "Knee pain when moving it",
        ]);
        Symptom::create([
            "id" => "s_1616",
            "type" => "symptom",
            "name" => "Dandruff",
            "common_name" => "Dandruff",
        ]);
        Symptom::create([
            "id" => "s_1617",
            "type" => "symptom",
            "name" => "Pruritus, scalp",
            "common_name" => "Itchy scalp",
        ]);
        Symptom::create([
            "id" => "s_1618",
            "type" => "symptom",
            "name" => "Lower limb tenderness",
            "common_name" => "Pain when pressing lower limb",
        ]);
        Symptom::create([
            "id" => "s_1620",
            "type" => "symptom",
            "name" => "Pain in lower limb, calf",
            "common_name" => "Calf pain",
        ]);
        Symptom::create([
            "id" => "s_1621",
            "type" => "symptom",
            "name" => "Joint pain, ankle",
            "common_name" => "Ankle pain",
        ]);
        Symptom::create([
            "id" => "s_1622",
            "type" => "symptom",
            "name" => "Lower limb tenderness, calf",
            "common_name" => "Pain when pressing calf",
        ]);
        Symptom::create([
            "id" => "s_1623",
            "type" => "symptom",
            "name" => "Joint pain, during ankle movement",
            "common_name" => "Ankle pain when moving it",
        ]);
        Symptom::create([
            "id" => "s_1625",
            "type" => "symptom",
            "name" => "Dyspnea, lasting more than 4 weeks",
            "common_name" => "Shortness of breath lasting more than 4 weeks",
        ]);
        Symptom::create([
            "id" => "s_1632",
            "type" => "symptom",
            "name" => "Joint pain, elbow",
            "common_name" => "Elbow pain",
        ]);
        Symptom::create([
            "id" => "s_1634",
            "type" => "symptom",
            "name" => "Joint pain, during elbow movement",
            "common_name" => "Elbow pain when moving it",
        ]);
        Symptom::create([
            "id" => "s_1635",
            "type" => "symptom",
            "name" => "Edema, elbow joint",
            "common_name" => "Swollen elbow",
        ]);
        Symptom::create([
            "id" => "s_1636",
            "type" => "symptom",
            "name" => "Joint pain, during wrist movement",
            "common_name" => "Wrist pain while moving",
        ]);
        Symptom::create([
            "id" => "s_1639",
            "type" => "symptom",
            "name" => "Joint pain, thumb",
            "common_name" => "Thumb pain",
        ]);
        Symptom::create([
            "id" => "s_1641",
            "type" => "symptom",
            "name" => "Joint pain, during thumb movement",
            "common_name" => "Thumb pain while moving",
        ]);
        Symptom::create([
            "id" => "s_1645",
            "type" => "symptom",
            "name" =>
                "Foot pain, back of the foot, during single-leg heel raise",
            "common_name" => "Pain in the back of foot while standing on toes",
        ]);
        Symptom::create([
            "id" => "s_1647",
            "type" => "symptom",
            "name" => "Annular skin lesions",
            "common_name" => "Ring-shaped skin changes",
        ]);
        Symptom::create([
            "id" => "s_1650",
            "type" => "symptom",
            "name" => "Skin thickening",
            "common_name" => "Skin thickening",
        ]);
        Symptom::create([
            "id" => "s_1652",
            "type" => "symptom",
            "name" => "Edema, hip joint",
            "common_name" => "Hip swelling",
        ]);
        Symptom::create([
            "id" => "s_1654",
            "type" => "symptom",
            "name" => "Joint pain, shoulder",
            "common_name" => "Shoulder pain",
        ]);
        Symptom::create([
            "id" => "s_1655",
            "type" => "symptom",
            "name" => "Edema, shoulder joint",
            "common_name" => "Swollen shoulder",
        ]);
        Symptom::create([
            "id" => "s_1656",
            "type" => "symptom",
            "name" => "Joint pain, tenderness",
            "common_name" => "Pain when pressing joint",
        ]);
        Symptom::create([
            "id" => "s_1671",
            "type" => "symptom",
            "name" => "Broken hair",
            "common_name" => "Broken hair",
        ]);
        Symptom::create([
            "id" => "s_1673",
            "type" => "symptom",
            "name" => "White oral plaques",
            "common_name" => "White patches inside the mouth",
        ]);
        Symptom::create([
            "id" => "s_1674",
            "type" => "symptom",
            "name" => "Skin pain",
            "common_name" => "Skin pain",
        ]);
        Symptom::create([
            "id" => "s_1676",
            "type" => "symptom",
            "name" => "Corn or callus",
            "common_name" => "Corn or callus",
        ]);
        Symptom::create([
            "id" => "s_1680",
            "type" => "symptom",
            "name" => "Dermatological changes, hyperpigmentation of the skin",
            "common_name" => "Dark skin changes",
        ]);
        Symptom::create([
            "id" => "s_1682",
            "type" => "symptom",
            "name" => "Rhinophyma",
            "common_name" => "Ruddy, bulbous nose",
        ]);
        Symptom::create([
            "id" => "s_1684",
            "type" => "symptom",
            "name" => "Burning skin, face",
            "common_name" => "Burning sensation on face",
        ]);
        Symptom::create([
            "id" => "s_1685",
            "type" => "symptom",
            "name" => "Telangiectasias, face",
            "common_name" => "Spider veins on the face",
        ]);
        Symptom::create([
            "id" => "s_1689",
            "type" => "symptom",
            "name" => "Kernig's sign",
            "common_name" => "Kernig's sign",
        ]);
        Symptom::create([
            "id" => "s_1690",
            "type" => "symptom",
            "name" => "Brudzinski's sign",
            "common_name" => "Brudzinski's sign",
        ]);
        Symptom::create([
            "id" => "s_1692",
            "type" => "symptom",
            "name" =>
                "Dermatological changes, exacerbated by alcohol consumption",
            "common_name" => "Skin changes worsening after alcohol consumption",
        ]);
        Symptom::create([
            "id" => "s_1693",
            "type" => "symptom",
            "name" => "Decreased intensity of breath sounds",
            "common_name" => "Decreased intensity of breath sounds",
        ]);
        Symptom::create([
            "id" => "s_1695",
            "type" => "symptom",
            "name" => "Interpersonal relationship difficulties",
            "common_name" => "Interpersonal relationship difficulties",
        ]);
        Symptom::create([
            "id" => "s_1696",
            "type" => "symptom",
            "name" => "Echolalia",
            "common_name" => "Echolalia",
        ]);
        Symptom::create([
            "id" => "s_1697",
            "type" => "symptom",
            "name" => "Restricted interests",
            "common_name" => "Having strong, limited, or unusual interests",
        ]);
        Symptom::create([
            "id" => "s_1698",
            "type" => "symptom",
            "name" => "Lack of eye contact",
            "common_name" => "Lack of eye contact",
        ]);
        Symptom::create([
            "id" => "s_1713",
            "type" => "symptom",
            "name" => "Restricted range of joint motion",
            "common_name" => "Restricted range of joint motion",
        ]);
        Symptom::create([
            "id" => "s_1715",
            "type" => "symptom",
            "name" => "Pathologic fractures",
            "common_name" => "Broken bone without having had an accident",
        ]);
        Symptom::create([
            "id" => "s_1718",
            "type" => "symptom",
            "name" => "Janeway lesion",
            "common_name" => "Janeway lesion",
        ]);
        Symptom::create([
            "id" => "s_1719",
            "type" => "symptom",
            "name" => "Osler nodes",
            "common_name" => "Osler nodes",
        ]);
        Symptom::create([
            "id" => "s_1720",
            "type" => "symptom",
            "name" => "Cardiac murmurs",
            "common_name" => "Cardiac murmurs",
        ]);
        Symptom::create([
            "id" => "s_1721",
            "type" => "symptom",
            "name" => "Nystagmus, horizontal",
            "common_name" => "Horizontal nystagmus",
        ]);
        Symptom::create([
            "id" => "s_1725",
            "type" => "symptom",
            "name" => "Lower limb pallor",
            "common_name" => "Pale leg",
        ]);
        Symptom::create([
            "id" => "s_1729",
            "type" => "symptom",
            "name" => "Abdominal pain, left lower quadrant",
            "common_name" => "Lower left side stomach pain",
        ]);
        Symptom::create([
            "id" => "s_1731",
            "type" => "symptom",
            "name" => "Dix-Hallpike maneuver, rotatory nystagmus",
            "common_name" => "Dix-Hallpike maneuver, rotatory nystagmus",
        ]);
        Symptom::create([
            "id" => "s_1732",
            "type" => "symptom",
            "name" => "Rovsing's sign",
            "common_name" => "Rovsing's sign",
        ]);
        Symptom::create([
            "id" => "s_1733",
            "type" => "symptom",
            "name" => "Lymph node pain",
            "common_name" => "Painful lymph nodes",
        ]);
        Symptom::create([
            "id" => "s_1738",
            "type" => "symptom",
            "name" => "Romberg's sign",
            "common_name" => "Romberg's sign",
        ]);
        Symptom::create([
            "id" => "s_1745",
            "type" => "symptom",
            "name" => "Knee instability",
            "common_name" => "Unstable knee",
        ]);
        Symptom::create([
            "id" => "s_1761",
            "type" => "symptom",
            "name" => "Dermatological changes, aggravated by stress",
            "common_name" => "Skin changes worsening under stress",
        ]);
        Symptom::create([
            "id" => "s_1762",
            "type" => "symptom",
            "name" => "Headache, exacerbated by increased stress",
            "common_name" => "Headache worsened by stress",
        ]);
        Symptom::create([
            "id" => "s_1763",
            "type" => "symptom",
            "name" => "Chest pain, exacerbated by stress",
            "common_name" => "Chest pain worsened by stress",
        ]);
        Symptom::create([
            "id" => "s_1765",
            "type" => "symptom",
            "name" => "Tremors, stress-related",
            "common_name" => "Trembling worsening under stress",
        ]);
        Symptom::create([
            "id" => "s_1766",
            "type" => "symptom",
            "name" => "Myalgia, exacerbated by stress",
            "common_name" => "Muscle pain triggered by increased stress",
        ]);
        Symptom::create([
            "id" => "s_1767",
            "type" => "symptom",
            "name" => "Gastric symptoms, stress-related",
            "common_name" => "Stress-related gastric symptoms",
        ]);
        Symptom::create([
            "id" => "s_1768",
            "type" => "symptom",
            "name" => "Mental disturbances exacerbated by stress",
            "common_name" => "Mental disturbances exacerbated by stress",
        ]);
        Symptom::create([
            "id" => "s_1772",
            "type" => "symptom",
            "name" => "Back pain, thoracic",
            "common_name" => "Middle or upper back pain",
        ]);
        Symptom::create([
            "id" => "s_1776",
            "type" => "symptom",
            "name" => "Dysphagia, oropharyngeal",
            "common_name" => "Difficulty initiating a swallow",
        ]);
        Symptom::create([
            "id" => "s_1779",
            "type" => "symptom",
            "name" => "Dysphagia, esophageal",
            "common_name" =>
                "Feeling of food getting stuck several seconds after swallowing",
        ]);
        Symptom::create([
            "id" => "s_1780",
            "type" => "symptom",
            "name" => "Headache, mild",
            "common_name" => "Mild headache",
        ]);
        Symptom::create([
            "id" => "s_1781",
            "type" => "symptom",
            "name" => "Headache, moderate",
            "common_name" => "Moderate headache",
        ]);
        Symptom::create([
            "id" => "s_1782",
            "type" => "symptom",
            "name" => "Abdominal pain, mild",
            "common_name" => "Mild stomach pain",
        ]);
        Symptom::create([
            "id" => "s_1783",
            "type" => "symptom",
            "name" => "Abdominal pain, moderate",
            "common_name" => "Moderate stomach pain",
        ]);
        Symptom::create([
            "id" => "s_1788",
            "type" => "symptom",
            "name" => "White nail discoloration",
            "common_name" => "White nail discoloration",
        ]);
        Symptom::create([
            "id" => "s_1789",
            "type" => "symptom",
            "name" => "Yellow nail discoloration",
            "common_name" => "Yellow nails",
        ]);
        Symptom::create([
            "id" => "s_1790",
            "type" => "symptom",
            "name" => "Thickened nails",
            "common_name" => "Thickened nails",
        ]);
        Symptom::create([
            "id" => "s_1791",
            "type" => "symptom",
            "name" => "Erythema, scalp",
            "common_name" => "Red patches on scalp",
        ]);
        Symptom::create([
            "id" => "s_1792",
            "type" => "symptom",
            "name" => "Visible head lice on scalp",
            "common_name" => "Visible head lice on scalp",
        ]);
        Symptom::create([
            "id" => "s_1793",
            "type" => "symptom",
            "name" => "Lice eggs or nits on hair shafts",
            "common_name" => "Lice eggs or nits on hair shafts",
        ]);
        Symptom::create([
            "id" => "s_1796",
            "type" => "symptom",
            "name" => "White patch on cornea",
            "common_name" => "White patch on cornea",
        ]);
        Symptom::create([
            "id" => "s_1798",
            "type" => "symptom",
            "name" => "Difference in size of testicles",
            "common_name" => "Difference in size of testicles",
        ]);
        Symptom::create([
            "id" => "s_1799",
            "type" => "symptom",
            "name" => "Forearm pain",
            "common_name" => "Pain in forearm",
        ]);
        Symptom::create([
            "id" => "s_1800",
            "type" => "symptom",
            "name" => "Past appendectomy",
            "common_name" => "Appendix removal in the past",
        ]);
        Symptom::create([
            "id" => "s_1801",
            "type" => "symptom",
            "name" => "Past cholecystectomy",
            "common_name" => "Gallbladder removal in the past",
        ]);
        Symptom::create([
            "id" => "s_1802",
            "type" => "symptom",
            "name" => "Abdominal pain, burning or gnawing",
            "common_name" => "Burning or gnawing stomach pain",
        ]);
        Symptom::create([
            "id" => "s_1803",
            "type" => "symptom",
            "name" => "Bulla",
            "common_name" =>
                "Large blisters with diameter equal or greater than 5 mm",
        ]);
        Symptom::create([
            "id" => "s_1804",
            "type" => "symptom",
            "name" => "Dermatological changes, vesicle",
            "common_name" => "Small blisters less than 5 mm",
        ]);
        Symptom::create([
            "id" => "s_1805",
            "type" => "symptom",
            "name" => "Joint pain, during shoulder movement",
            "common_name" => "Shoulder pain while moving",
        ]);
        Symptom::create([
            "id" => "s_1807",
            "type" => "symptom",
            "name" => "Blisters",
            "common_name" => "Blisters on the skin or in the mouth",
        ]);
        Symptom::create([
            "id" => "s_1808",
            "type" => "symptom",
            "name" => "Dermatological changes, located on the face",
            "common_name" => "Skin changes located on the face",
        ]);
        Symptom::create([
            "id" => "s_1810",
            "type" => "symptom",
            "name" => "Dermatological changes, located in the genital area",
            "common_name" => "Skin changes on or around genitals",
        ]);
        Symptom::create([
            "id" => "s_1811",
            "type" => "symptom",
            "name" => "Vaginal dryness",
            "common_name" => "Vaginal dryness",
        ]);
        Symptom::create([
            "id" => "s_1812",
            "type" => "symptom",
            "name" => "Nasal congestion, chronic",
            "common_name" => "Chronic stuffed nose",
        ]);
        Symptom::create([
            "id" => "s_1818",
            "type" => "symptom",
            "name" => "Impaired vision, recent onset",
            "common_name" => "Newly impaired vision",
        ]);
        Symptom::create([
            "id" => "s_1819",
            "type" => "symptom",
            "name" => "Impaired vision in one eye",
            "common_name" => "Impaired vision in one eye",
        ]);
        Symptom::create([
            "id" => "s_1820",
            "type" => "symptom",
            "name" => "Fever, temperature not measured",
            "common_name" => "Fever, temperature not measured",
        ]);
        Symptom::create([
            "id" => "s_1823",
            "type" => "symptom",
            "name" => "Joint pain, during hip movement",
            "common_name" => "Joint pain, during hip movement",
        ]);
        Symptom::create([
            "id" => "s_1826",
            "type" => "symptom",
            "name" => "Pharyngeal pain, unilateral",
            "common_name" => "One-sided sore throat",
        ]);
        Symptom::create([
            "id" => "s_1829",
            "type" => "symptom",
            "name" => "Vulvovaginal pain",
            "common_name" => "Vulvovaginal pain",
        ]);
        Symptom::create([
            "id" => "s_1830",
            "type" => "symptom",
            "name" => "Skin mass greater than 1 cm in diameter",
            "common_name" => "Skin bump greater than 1 cm in diameter",
        ]);
        Symptom::create([
            "id" => "s_1831",
            "type" => "symptom",
            "name" => "Skin mass",
            "common_name" => "Skin mass",
        ]);
        Symptom::create([
            "id" => "s_1833",
            "type" => "symptom",
            "name" => "Toe pain",
            "common_name" => "Toe pain",
        ]);
        Symptom::create([
            "id" => "s_1835",
            "type" => "symptom",
            "name" => "Body aches",
            "common_name" => "Body aches",
        ]);
        Symptom::create([
            "id" => "s_1840",
            "type" => "symptom",
            "name" => "Abdominal pain, lasting less than 2 days",
            "common_name" => "Stomach pain lasting less than 2 days",
        ]);
        Symptom::create([
            "id" => "s_1842",
            "type" => "symptom",
            "name" => "Abdominal pain, lasting more than 2 weeks",
            "common_name" => "Stomach pain lasting more than 2 weeks",
        ]);
        Symptom::create([
            "id" => "s_1843",
            "type" => "symptom",
            "name" => "Abdominal pain, sudden onset",
            "common_name" => "Sudden stomach pain",
        ]);
        Symptom::create([
            "id" => "s_1844",
            "type" => "symptom",
            "name" => "Abdominal pain, gradual onset",
            "common_name" => "Slow and gradual stomach pain",
        ]);
        Symptom::create([
            "id" => "s_1845",
            "type" => "symptom",
            "name" =>
                "Abdominal pain, radiating to left shoulder or shoulder blade",
            "common_name" => "Stomach pain spreading to the left shoulder area",
        ]);
        Symptom::create([
            "id" => "s_1846",
            "type" => "symptom",
            "name" =>
                "Abdominal pain, radiating to lower or middle part of the back",
            "common_name" =>
                "Stomach pain spreading to the lower or middle back",
        ]);
        Symptom::create([
            "id" => "s_1847",
            "type" => "symptom",
            "name" => "Abdominal pain, recurrent",
            "common_name" => "Recurrent stomach pain",
        ]);
        Symptom::create([
            "id" => "s_1848",
            "type" => "symptom",
            "name" => "Abdominal pain, colicky",
            "common_name" => "Colic stomach pain",
        ]);
        Symptom::create([
            "id" => "s_1851",
            "type" => "symptom",
            "name" => "Abdominal pain, migrating to the right lower quadrant",
            "common_name" => "Stomach pain, moved to the lower right side",
        ]);
        Symptom::create([
            "id" => "s_1852",
            "type" => "symptom",
            "name" => "Abdominal pain, lasting 2 to 7 days",
            "common_name" => "Stomach pain lasting 2 to 7 days",
        ]);
        Symptom::create([
            "id" => "s_1853",
            "type" => "symptom",
            "name" => "Abdominal pain, lasting 8 to 14 days",
            "common_name" => "Stomach pain lasting 8 to 14 days",
        ]);
        Symptom::create([
            "id" => "s_1854",
            "type" => "symptom",
            "name" => "Abdominal pain, left side",
            "common_name" => "Left side stomach pain",
        ]);
        Symptom::create([
            "id" => "s_1855",
            "type" => "symptom",
            "name" => "Abdominal pain, right side",
            "common_name" => "Right side stomach pain",
        ]);
        Symptom::create([
            "id" => "s_1856",
            "type" => "symptom",
            "name" => "Abdominal tenderness, right lower quadrant",
            "common_name" =>
                "Pain when pressing lower right part of the stomach",
        ]);
        Symptom::create([
            "id" => "s_1858",
            "type" => "symptom",
            "name" => "Cough, lasting 3 to 8 weeks",
            "common_name" => "Cough lasting 3 to 8 weeks",
        ]);
        Symptom::create([
            "id" => "s_1859",
            "type" => "symptom",
            "name" => "Abdominal pain, midcycle",
            "common_name" => "Painful ovulation",
        ]);
        Symptom::create([
            "id" => "s_1860",
            "type" => "symptom",
            "name" => "Abdominal pain, crampy",
            "common_name" => "Crampy stomach pain",
        ]);
        Symptom::create([
            "id" => "s_1864",
            "type" => "symptom",
            "name" => "Headache, excruciating",
            "common_name" => "Worst headache ever",
        ]);
        Symptom::create([
            "id" => "s_1868",
            "type" => "symptom",
            "name" => "Headache, chronic, lasting 5 minutes to 4 hours",
            "common_name" => "Headache lasting between 5 minutes and 4 hours",
        ]);
        Symptom::create([
            "id" => "s_1870",
            "type" => "symptom",
            "name" => "Headache, chronic, lasting 4 to 72 hours",
            "common_name" => "Headache attack lasting 4 to 72 hours",
        ]);
        Symptom::create([
            "id" => "s_1871",
            "type" => "symptom",
            "name" => "Headache, exacerbated by physical activity",
            "common_name" => "Headache worsened by physical activity",
        ]);
        Symptom::create([
            "id" => "s_1875",
            "type" => "symptom",
            "name" => "Vulvovaginal burning",
            "common_name" => "Vulvovaginal burning",
        ]);
        Symptom::create([
            "id" => "s_1876",
            "type" => "symptom",
            "name" => "Hypomenorrhea",
            "common_name" => "Short or scanty periods",
        ]);
        Symptom::create([
            "id" => "s_1877",
            "type" => "symptom",
            "name" => "Oligomenorrhea",
            "common_name" => "Infrequent menstrual periods",
        ]);
        Symptom::create([
            "id" => "s_1878",
            "type" => "symptom",
            "name" => "Pain in the back of the leg, above the heel",
            "common_name" => "Pain in the back of the leg, above the heel",
        ]);
        Symptom::create([
            "id" => "s_1891",
            "type" => "symptom",
            "name" => "Hypersensitivity to smells",
            "common_name" => "Oversensitivity to smells",
        ]);
        Symptom::create([
            "id" => "s_1893",
            "type" => "symptom",
            "name" => "Pain in lower limb, thigh",
            "common_name" => "Thigh pain",
        ]);
        Symptom::create([
            "id" => "s_1899",
            "type" => "symptom",
            "name" => "Tingling fingers, first three digits",
            "common_name" => "Tingling in the thumb, index and middle finger",
        ]);
        Symptom::create([
            "id" => "s_1900",
            "type" => "symptom",
            "name" => "Tingling fingers, fourth and fifth digits",
            "common_name" => "Tingling in the ring and little finger",
        ]);
        Symptom::create([
            "id" => "s_1901",
            "type" => "symptom",
            "name" => "Headache, chronic, lasting 3 to 7 days",
            "common_name" => "Headache attacks lasting 3 to 7 days",
        ]);
        Symptom::create([
            "id" => "s_1903",
            "type" => "symptom",
            "name" => "Restricted passive range of joint motion",
            "common_name" => "Restricted passive range of joint motion",
        ]);
        Symptom::create([
            "id" => "s_1905",
            "type" => "symptom",
            "name" => "Headache, sudden onset",
            "common_name" => "Sudden headache",
        ]);
        Symptom::create([
            "id" => "s_1907",
            "type" => "symptom",
            "name" => "Headache, chronic, lasting less than 5 minutes",
            "common_name" => "Headache lasting less than 5 minutes",
        ]);
        Symptom::create([
            "id" => "s_1909",
            "type" => "symptom",
            "name" => "Foot drop",
            "common_name" => "Dropping the front of the foot",
        ]);
        Symptom::create([
            "id" => "s_1910",
            "type" => "symptom",
            "name" => "Wrist drop",
            "common_name" => "Dropping hand",
        ]);
        Symptom::create([
            "id" => "s_1911",
            "type" => "symptom",
            "name" => "Headache, temporal region",
            "common_name" => "Headache located over the temples",
        ]);
        Symptom::create([
            "id" => "s_1912",
            "type" => "symptom",
            "name" => "Headache, recent",
            "common_name" => "Headaches history shorter than 3 months",
        ]);
        Symptom::create([
            "id" => "s_1915",
            "type" => "symptom",
            "name" => "Purpuric rash, palpable",
            "common_name" =>
                "Rash with small red or purple spots, not fading under pressure, that can be felt",
        ]);
        Symptom::create([
            "id" => "s_1918",
            "type" => "symptom",
            "name" => "Buttocks pain",
            "common_name" => "Buttocks pain",
        ]);
        Symptom::create([
            "id" => "s_1921",
            "type" => "symptom",
            "name" =>
                "Dermatological changes, exacerbated by sunlight exposure",
            "common_name" =>
                "Skin changes appearing or worsening after exposure to sunlight",
        ]);
        Symptom::create([
            "id" => "s_1922",
            "type" => "symptom",
            "name" => "Heel drop test",
            "common_name" => "Stomach pain after dropping hard on heels",
        ]);
        Symptom::create([
            "id" => "s_1923",
            "type" => "symptom",
            "name" => "Dermatological changes, feet",
            "common_name" => "Skin changes on feet",
        ]);
        Symptom::create([
            "id" => "s_1924",
            "type" => "symptom",
            "name" => "Cough, paroxysmal",
            "common_name" => "Severe and sudden coughing attacks",
        ]);
        Symptom::create([
            "id" => "s_1925",
            "type" => "symptom",
            "name" => "Chest pain, pressure",
            "common_name" => "Pressing chest pain",
        ]);
        Symptom::create([
            "id" => "s_1926",
            "type" => "symptom",
            "name" => "Cold and clammy skin",
            "common_name" => "Cold and clammy skin",
        ]);
        Symptom::create([
            "id" => "s_1927",
            "type" => "symptom",
            "name" => "Limping due to pain",
            "common_name" => "Limping due to pain",
        ]);
        Symptom::create([
            "id" => "s_1929",
            "type" => "symptom",
            "name" => "Abdominal pain, unbearable",
            "common_name" => "Unbearable stomach pain",
        ]);
        Symptom::create([
            "id" => "s_1930",
            "type" => "symptom",
            "name" => "Pain in lower limb, severe",
            "common_name" => "Severe pain in lower limb",
        ]);
        Symptom::create([
            "id" => "s_1931",
            "type" => "symptom",
            "name" => "Skin mass, bleeding",
            "common_name" => "Skin mass, bleeding",
        ]);
        Symptom::create([
            "id" => "s_1932",
            "type" => "symptom",
            "name" => "Paresthesia, sudden onset",
            "common_name" => "Numbness or tingling of sudden onset",
        ]);
        Symptom::create([
            "id" => "s_1933",
            "type" => "symptom",
            "name" => "Elevated blood pressure, severe",
            "common_name" => "Very high blood pressure",
        ]);
        Symptom::create([
            "id" => "s_1934",
            "type" => "symptom",
            "name" => "Complete vision loss, recent",
            "common_name" => "Recent complete vision loss",
        ]);
        Symptom::create([
            "id" => "s_1935",
            "type" => "symptom",
            "name" => "Pain in upper limb, severe",
            "common_name" => "Severe pain in upper limb",
        ]);
        Symptom::create([
            "id" => "s_1937",
            "type" => "symptom",
            "name" => "Worms in stool",
            "common_name" => "Worms in stool",
        ]);
        Symptom::create([
            "id" => "s_1943",
            "type" => "symptom",
            "name" => "Sunburn",
            "common_name" => "Sunburn",
        ]);
        Symptom::create([
            "id" => "s_1949",
            "type" => "symptom",
            "name" => "Vomiting, every time after meal",
            "common_name" => "Vomiting after every meal",
        ]);
        Symptom::create([
            "id" => "s_1952",
            "type" => "symptom",
            "name" => "Chest pain, recurrent",
            "common_name" => "Recurrent chest pain",
        ]);
        Symptom::create([
            "id" => "s_1955",
            "type" => "symptom",
            "name" => "Erythema around eyes",
            "common_name" => "Redness around eyes",
        ]);
        Symptom::create([
            "id" => "s_1957",
            "type" => "symptom",
            "name" => "Destructive thoughts towards other people or things",
            "common_name" =>
                "Destructive thoughts towards other people or things",
        ]);
        Symptom::create([
            "id" => "s_1958",
            "type" => "symptom",
            "name" => "Dysphonia, more than 2 weeks",
            "common_name" => "Hoarseness lasting more than 2 weeks",
        ]);
        Symptom::create([
            "id" => "s_1960",
            "type" => "symptom",
            "name" => "Bruise, after trauma",
            "common_name" => "Bruise after an injury",
        ]);
        Symptom::create([
            "id" => "s_1961",
            "type" => "symptom",
            "name" => "Jaw pain",
            "common_name" => "Jaw pain",
        ]);
        Symptom::create([
            "id" => "s_1973",
            "type" => "symptom",
            "name" => "Active wound bleeding",
            "common_name" => "Active wound bleeding",
        ]);
        Symptom::create([
            "id" => "s_1979",
            "type" => "symptom",
            "name" => "Diarrhea, more than 6 stools a day",
            "common_name" => "Diarrhea with more than six stools a day",
        ]);
        Symptom::create([
            "id" => "s_1980",
            "type" => "symptom",
            "name" => "Wound",
            "common_name" => "Wound",
        ]);
        Symptom::create([
            "id" => "s_1981",
            "type" => "symptom",
            "name" => "Wound infection",
            "common_name" => "Wound infection",
        ]);
        Symptom::create([
            "id" => "s_1982",
            "type" => "symptom",
            "name" => "Dermatological changes, hands",
            "common_name" => "Skin changes on hands",
        ]);
        Symptom::create([
            "id" => "s_1983",
            "type" => "symptom",
            "name" => "Eyelid lesion, itching",
            "common_name" => "Itchy skin changes on eyelid",
        ]);
        Symptom::create([
            "id" => "s_1985",
            "type" => "symptom",
            "name" => "Cough, nocturnal",
            "common_name" => "Nighttime cough",
        ]);
        Symptom::create([
            "id" => "s_1988",
            "type" => "symptom",
            "name" => "Dermatological changes, spreading",
            "common_name" => "Enlarging or spreading skin changes",
        ]);
        Symptom::create([
            "id" => "s_1989",
            "type" => "symptom",
            "name" => "Electrical burn",
            "common_name" => "Electrical burn",
        ]);
        Symptom::create([
            "id" => "s_1994",
            "type" => "symptom",
            "name" => "Discharge from ear, purulent",
            "common_name" => "Yellow or green discharge from ear",
        ]);
        Symptom::create([
            "id" => "s_1995",
            "type" => "symptom",
            "name" => "Edema, both feet",
            "common_name" => "Swollen feet",
        ]);
        Symptom::create([
            "id" => "s_1996",
            "type" => "symptom",
            "name" => "Edema, nose",
            "common_name" => "Swollen nose",
        ]);
        Symptom::create([
            "id" => "s_1997",
            "type" => "symptom",
            "name" => "Edema, toe",
            "common_name" => "Swollen toe",
        ]);
        Symptom::create([
            "id" => "s_1999",
            "type" => "symptom",
            "name" => "Erythema, vulva",
            "common_name" => "Reddened vulva",
        ]);
        Symptom::create([
            "id" => "s_2000",
            "type" => "symptom",
            "name" => "Fever greater than 104°F (40°C)",
            "common_name" => "Fever greater than 104°F (40°C)",
        ]);
        Symptom::create([
            "id" => "s_2001",
            "type" => "symptom",
            "name" => "Paresthesia, one lower limb",
            "common_name" => "Numbness in one lower limb",
        ]);
        Symptom::create([
            "id" => "s_2002",
            "type" => "symptom",
            "name" => "Palpitations, over 5 minutes",
            "common_name" => "Palpitations, over 5 minutes",
        ]);
        Symptom::create([
            "id" => "s_2003",
            "type" => "symptom",
            "name" => "Erythema, toe",
            "common_name" => "Red toe",
        ]);
        Symptom::create([
            "id" => "s_2004",
            "type" => "symptom",
            "name" => "Palpitations, recurrent",
            "common_name" => "Palpitations, recurrent",
        ]);
        Symptom::create([
            "id" => "s_2005",
            "type" => "symptom",
            "name" => "Nail pain",
            "common_name" => "Sore nail",
        ]);
        Symptom::create([
            "id" => "s_2006",
            "type" => "symptom",
            "name" => "Chest pain, exacerbating when lying down",
            "common_name" => "Chest pain worsening when lying down",
        ]);
        Symptom::create([
            "id" => "s_2008",
            "type" => "symptom",
            "name" => "Regular uterine contractions",
            "common_name" => "Regular uterine contractions",
        ]);
        Symptom::create([
            "id" => "s_2010",
            "type" => "symptom",
            "name" => "Fetal membranes rupture",
            "common_name" => "Water breaking",
        ]);
        Symptom::create([
            "id" => "s_2016",
            "type" => "symptom",
            "name" => "Nosebleed, single episode",
            "common_name" => "One episode of bleeding from the nose",
        ]);
        Symptom::create([
            "id" => "s_2017",
            "type" => "symptom",
            "name" => "Nosebleeds, recurrent",
            "common_name" => "Recurrent bleeding from the nose",
        ]);
        Symptom::create([
            "id" => "s_2018",
            "type" => "symptom",
            "name" => "Chest pain, lasting less than 30 minutes",
            "common_name" => "Chest pain lasting less than 30 minutes",
        ]);
        Symptom::create([
            "id" => "s_2019",
            "type" => "symptom",
            "name" => "Chest pain, lasting between 30 minutes and 8 hours",
            "common_name" =>
                "Chest pain lasting between 30 minutes and 8 hours",
        ]);
        Symptom::create([
            "id" => "s_2022",
            "type" => "symptom",
            "name" => "Chest pain, lasting more than 8 hours",
            "common_name" => "Chest pain lasting more than 8 hours",
        ]);
        Symptom::create([
            "id" => "s_2023",
            "type" => "symptom",
            "name" => "Dizziness, recurrent",
            "common_name" => "Dizziness, recurrent",
        ]);
        Symptom::create([
            "id" => "s_2024",
            "type" => "symptom",
            "name" => "Gambling, pathological",
            "common_name" => "Excessive gambling",
        ]);
        Symptom::create([
            "id" => "s_2029",
            "type" => "symptom",
            "name" => "Lying to hide the extent of your gambling",
            "common_name" => "Lying to hide the extent of your gambling",
        ]);
        Symptom::create([
            "id" => "s_2032",
            "type" => "symptom",
            "name" => "Gambling",
            "common_name" => "Gambling",
        ]);
        Symptom::create([
            "id" => "s_2033",
            "type" => "symptom",
            "name" => "Pruritus, foot",
            "common_name" => "Itching of a foot or feet",
        ]);
        Symptom::create([
            "id" => "s_2034",
            "type" => "symptom",
            "name" => "Consciousness disturbances",
            "common_name" => "Confusion or disorientation",
        ]);
        Symptom::create([
            "id" => "s_2039",
            "type" => "symptom",
            "name" => "Third-degree burn",
            "common_name" => "Full-thickness skin burn",
        ]);
        Symptom::create([
            "id" => "s_2040",
            "type" => "symptom",
            "name" =>
                "Burn involving face, hands, feet, genitalia, or major joints",
            "common_name" =>
                "Burn involving face, hands, feet, genitalia, or major joints",
        ]);
        Symptom::create([
            "id" => "s_2041",
            "type" => "symptom",
            "name" => "Halos around lights",
            "common_name" => "Halos around lights",
        ]);
        Symptom::create([
            "id" => "s_2043",
            "type" => "symptom",
            "name" => "Penile itching",
            "common_name" => "Penile itching",
        ]);
        Symptom::create([
            "id" => "s_2045",
            "type" => "symptom",
            "name" => "Seizures",
            "common_name" => "Seizures",
        ]);
        Symptom::create([
            "id" => "s_2047",
            "type" => "symptom",
            "name" => "Absence seizure",
            "common_name" => "Absence seizure",
        ]);
        Symptom::create([
            "id" => "s_2048",
            "type" => "symptom",
            "name" => "Bedwetting",
            "common_name" => "Bedwetting",
        ]);
        Symptom::create([
            "id" => "s_2051",
            "type" => "symptom",
            "name" => "Chest pain, exacerbated by chest wall movement",
            "common_name" => "Chest pain worsening during chest wall movement",
        ]);
        Symptom::create([
            "id" => "s_2052",
            "type" => "symptom",
            "name" => "Male infertility",
            "common_name" => "Male infertility",
        ]);
        Symptom::create([
            "id" => "s_2055",
            "type" => "symptom",
            "name" => "Vomiting, bilious",
            "common_name" => "Greenish-yellow vomit",
        ]);
        Symptom::create([
            "id" => "s_2056",
            "type" => "symptom",
            "name" => "Vomiting, less than 7 days",
            "common_name" => "Vomiting for less than a week",
        ]);
        Symptom::create([
            "id" => "s_2057",
            "type" => "symptom",
            "name" => "Vomiting, 7 days or more",
            "common_name" => "Vomiting for more than a week",
        ]);
        Symptom::create([
            "id" => "s_2059",
            "type" => "symptom",
            "name" => "Dermatological changes, scalp",
            "common_name" => "Skin changes on the scalp",
        ]);
        Symptom::create([
            "id" => "s_2060",
            "type" => "symptom",
            "name" => "Dermatological changes, trunk",
            "common_name" => "Skin changes located on trunk",
        ]);
        Symptom::create([
            "id" => "s_2068",
            "type" => "symptom",
            "name" => "Upper limb pallor",
            "common_name" => "Pale arm",
        ]);
        Symptom::create([
            "id" => "s_2070",
            "type" => "symptom",
            "name" => "Bone pain, lasting less than a week",
            "common_name" => "Bone pain lasting less than a week",
        ]);
        Symptom::create([
            "id" => "s_2071",
            "type" => "symptom",
            "name" => "Bone pain, lasting more than 1 week",
            "common_name" => "Bone pain lasting more than 1 week",
        ]);
        Symptom::create([
            "id" => "s_2072",
            "type" => "symptom",
            "name" => "Consciousness disturbances, acute",
            "common_name" => "Disorientation or confusion starting recently",
        ]);
        Symptom::create([
            "id" => "s_2073",
            "type" => "symptom",
            "name" => "Consciousness disturbances, chronic",
            "common_name" =>
                "Disorientation or confusion lasting more than a week",
        ]);
        Symptom::create([
            "id" => "s_2074",
            "type" => "symptom",
            "name" => "Chest pain, radiating to left upper limb",
            "common_name" => "Chest pain, spreading  to the left upper limb",
        ]);
        Symptom::create([
            "id" => "s_2075",
            "type" => "symptom",
            "name" => "Dyspnea, acute, after trauma",
            "common_name" => "Sudden breathing problems after an injury",
        ]);
        Symptom::create([
            "id" => "s_2076",
            "type" => "symptom",
            "name" => "Respiratory distress, after trauma",
            "common_name" => "Breathing problems after an injury",
        ]);
        Symptom::create([
            "id" => "s_2077",
            "type" => "symptom",
            "name" => "Major bleeding",
            "common_name" => "Major bleeding",
        ]);
        Symptom::create([
            "id" => "s_2078",
            "type" => "symptom",
            "name" => "Minor uncontrollable bleeding",
            "common_name" => "Minor uncontrollable bleeding",
        ]);
        Symptom::create([
            "id" => "s_2079",
            "type" => "symptom",
            "name" => "Recent injury without bleeding",
            "common_name" => "Recent injury without bleeding",
        ]);
        Symptom::create([
            "id" => "s_2080",
            "type" => "symptom",
            "name" => "Neurological deficit, since less than 24 hours",
            "common_name" =>
                "New neurological changes since less than 24 hours",
        ]);
        Symptom::create([
            "id" => "s_2081",
            "type" => "symptom",
            "name" => "Severe pain, after trauma",
            "common_name" => "Severe pain after an injury",
        ]);
        Symptom::create([
            "id" => "s_2082",
            "type" => "symptom",
            "name" => "Vascular compromise",
            "common_name" => "Limited blood supply past the injury site",
        ]);
        Symptom::create([
            "id" => "s_2083",
            "type" => "symptom",
            "name" => "Neurological deficit, since more than 24 hours",
            "common_name" => "New neurological changes lasting over 24 hours",
        ]);
        Symptom::create([
            "id" => "s_2084",
            "type" => "symptom",
            "name" => "Periorbital ecchymosis",
            "common_name" => "Bruising around the eyes",
        ]);
        Symptom::create([
            "id" => "s_2085",
            "type" => "symptom",
            "name" => "Back pain, worsens on palpation",
            "common_name" =>
                "Back pain worsens by touching or pressing the affected area",
        ]);
        Symptom::create([
            "id" => "s_2086",
            "type" => "symptom",
            "name" => "Inability to bear weight, after trauma",
            "common_name" =>
                "Inability to stand on either feet after an injury",
        ]);
        Symptom::create([
            "id" => "s_2087",
            "type" => "symptom",
            "name" => "Joint deformation, post-traumatic",
            "common_name" => "Deformed joints after an injury",
        ]);
        Symptom::create([
            "id" => "s_2088",
            "type" => "symptom",
            "name" => "Physical injury symptom",
            "common_name" => "Injury",
        ]);
        Symptom::create([
            "id" => "s_2089",
            "type" => "symptom",
            "name" =>
                "Serious injury, respiratory difficulty, severe bleeding, new neurological problem",
            "common_name" =>
                "Serious injury, respiratory difficulty, severe bleeding, new neurological problem",
        ]);
        Symptom::create([
            "id" => "s_2091",
            "type" => "symptom",
            "name" => "Pain in both hands",
            "common_name" => "Pain in both hands",
        ]);
        Symptom::create([
            "id" => "s_2092",
            "type" => "symptom",
            "name" => "Pain in both feet",
            "common_name" => "Feet pain",
        ]);
        Symptom::create([
            "id" => "s_2093",
            "type" => "symptom",
            "name" => "Edema, both hands",
            "common_name" => "Swollen hands",
        ]);
        Symptom::create([
            "id" => "s_2094",
            "type" => "symptom",
            "name" => "Dry eyes",
            "common_name" => "Dry eyes",
        ]);
        Symptom::create([
            "id" => "s_2096",
            "type" => "symptom",
            "name" => "Chest pain, burning",
            "common_name" => "Burning chest pain",
        ]);
        Symptom::create([
            "id" => "s_2098",
            "type" => "symptom",
            "name" => "Delusions",
            "common_name" => "Delusions",
        ]);
        Symptom::create([
            "id" => "s_2100",
            "type" => "symptom",
            "name" => "Fatigue",
            "common_name" => "Fatigue",
        ]);
        Symptom::create([
            "id" => "s_2103",
            "type" => "symptom",
            "name" => "Edema, one foot",
            "common_name" => "Swollen foot",
        ]);
        Symptom::create([
            "id" => "s_2108",
            "type" => "symptom",
            "name" => "Cognitive disturbances",
            "common_name" => "Cognitive disturbances",
        ]);
        Symptom::create([
            "id" => "s_2109",
            "type" => "symptom",
            "name" => "Coma",
            "common_name" => "Coma",
        ]);
        Symptom::create([
            "id" => "s_2110",
            "type" => "symptom",
            "name" => "Dermatological changes, female genital area",
            "common_name" => "Skin changes on or around female genital area",
        ]);
        Symptom::create([
            "id" => "s_2111",
            "type" => "symptom",
            "name" => "Dermatological changes, male genital area",
            "common_name" => "Skin changes on or around male genital area",
        ]);
        Symptom::create([
            "id" => "s_2112",
            "type" => "symptom",
            "name" => "Pleuritic chest pain, after trauma",
            "common_name" => "Sudden and sharp chest pain after an injury",
        ]);
        Symptom::create([
            "id" => "s_2118",
            "type" => "symptom",
            "name" => "Dizziness, unbearable",
            "common_name" => "Unbearable dizziness",
        ]);
        Symptom::create([
            "id" => "s_2119",
            "type" => "symptom",
            "name" => "Painless wound",
            "common_name" => "Painless wound",
        ]);
        Symptom::create([
            "id" => "s_2121",
            "type" => "symptom",
            "name" => "Acid reflux",
            "common_name" => "Acidic taste in mouth",
        ]);
        Symptom::create([
            "id" => "s_2125",
            "type" => "symptom",
            "name" =>
                "Fetal membranes rupture, purulent or malodorous amniotic fluid",
            "common_name" => "Smelly or coloured waters",
        ]);
        Symptom::create([
            "id" => "s_2126",
            "type" => "symptom",
            "name" => "Diarrhea, lasting less than 48 hours",
            "common_name" => "Diarrhea lasting less than 48 hours",
        ]);
        Symptom::create([
            "id" => "s_2134",
            "type" => "symptom",
            "name" => "Chest retractions",
            "common_name" => "Chest retractions",
        ]);
        Symptom::create([
            "id" => "s_2141",
            "type" => "symptom",
            "name" => "Eye discharge",
            "common_name" => "Eye discharge",
        ]);
        Symptom::create([
            "id" => "s_2142",
            "type" => "symptom",
            "name" => "Weight faltering",
            "common_name" => "Weight faltering",
        ]);
        Symptom::create([
            "id" => "s_2152",
            "type" => "symptom",
            "name" => "Learning disability",
            "common_name" => "Learning disability",
        ]);
        Symptom::create([
            "id" => "s_2153",
            "type" => "symptom",
            "name" => "Nasal catarrh, mucoid",
            "common_name" => "Clear or white nasal discharge",
        ]);
        Symptom::create([
            "id" => "s_2154",
            "type" => "symptom",
            "name" => "Nasal catarrh, purulent",
            "common_name" => "Yellow or green nasal discharge",
        ]);
        Symptom::create([
            "id" => "s_2162",
            "type" => "symptom",
            "name" => "Constipation, chronic",
            "common_name" => "Chronic constipation",
        ]);
        Symptom::create([
            "id" => "s_2163",
            "type" => "symptom",
            "name" => "Twisted neck",
            "common_name" => "Twisted neck",
        ]);
        Symptom::create([
            "id" => "s_2164",
            "type" => "symptom",
            "name" => "Consumption of expired food or drink",
            "common_name" => "Spoiled food or drink consumption",
        ]);
        Symptom::create([
            "id" => "s_2166",
            "type" => "symptom",
            "name" => "Wheezing, acute",
            "common_name" => "Wheezing, acute",
        ]);
        Symptom::create([
            "id" => "s_2168",
            "type" => "symptom",
            "name" => "Normal body temperature",
            "common_name" => "Normal body temperature",
        ]);
        Symptom::create([
            "id" => "s_2169",
            "type" => "symptom",
            "name" => "Normal heart rate",
            "common_name" => "Normal pulse",
        ]);
        Symptom::create([
            "id" => "s_2170",
            "type" => "symptom",
            "name" => "Anicteric presentation",
            "common_name" => "Anicteric presentation",
        ]);
        Symptom::create([
            "id" => "s_2171",
            "type" => "symptom",
            "name" => "Normal lung sounds on auscultation",
            "common_name" => "Normal lung sounds on auscultation",
        ]);
        Symptom::create([
            "id" => "s_2172",
            "type" => "symptom",
            "name" => "No signs of upper respiratory infection",
            "common_name" => "No signs of upper respiratory infection",
        ]);
        Symptom::create([
            "id" => "s_2173",
            "type" => "symptom",
            "name" => "Neck pain, during head movement",
            "common_name" =>
                "Neck pain appearing or worsening during head movement",
        ]);
        Symptom::create([
            "id" => "s_2174",
            "type" => "symptom",
            "name" => "Normal vital signs",
            "common_name" => "Normal vital signs",
        ]);
        Symptom::create([
            "id" => "s_2175",
            "type" => "symptom",
            "name" => "Possible rabies exposure",
            "common_name" => "Possible rabies exposure",
        ]);
        Symptom::create([
            "id" => "s_2176",
            "type" => "symptom",
            "name" => "Dyspnea, lasting 1 to 24 hours",
            "common_name" => "Shortness of breath lasting 1 to 24 hours",
        ]);
        Symptom::create([
            "id" => "s_2180",
            "type" => "symptom",
            "name" => "Bone deformation, non-traumatic",
            "common_name" =>
                "Bone deformation not associated with a recent trauma",
        ]);
        Symptom::create([
            "id" => "s_2181",
            "type" => "symptom",
            "name" => "Bone deformation, post-traumatic",
            "common_name" => "Bone deformation after a recent injury",
        ]);
        Symptom::create([
            "id" => "s_2182",
            "type" => "symptom",
            "name" => "Flank pain",
            "common_name" => "Pain on sides of body",
        ]);
        Symptom::create([
            "id" => "s_2186",
            "type" => "symptom",
            "name" => "Female genital burn",
            "common_name" => "Female genital burn",
        ]);
        Symptom::create([
            "id" => "s_2187",
            "type" => "symptom",
            "name" => "Male genital burn",
            "common_name" => "Male genital burn",
        ]);
        Symptom::create([
            "id" => "s_2188",
            "type" => "symptom",
            "name" => "Eye discharge, purulent",
            "common_name" => "Purulent eye discharge",
        ]);
        Symptom::create([
            "id" => "s_2189",
            "type" => "symptom",
            "name" => "Headache, recent, lasting less than 1 hour",
            "common_name" => "Headache lasting less than 1 hour",
        ]);
        Symptom::create([
            "id" => "s_2190",
            "type" => "symptom",
            "name" => "Headache, recent, lasting 1 to 24 hours",
            "common_name" => "Headache lasting between 1 hour and 1 day",
        ]);
        Symptom::create([
            "id" => "s_2191",
            "type" => "symptom",
            "name" => "Headache, recent, lasting more than 1 day",
            "common_name" => "Headache lasting for more than 1 day",
        ]);
        Symptom::create([
            "id" => "s_2194",
            "type" => "symptom",
            "name" => "Diarrhea, lasting 2 to 14 days",
            "common_name" => "Diarrhea lasting 2 to 14 days",
        ]);
        Symptom::create([
            "id" => "s_2196",
            "type" => "symptom",
            "name" => "Cold feet and toes, unilateral",
            "common_name" => "Cold foot",
        ]);
        Symptom::create([
            "id" => "s_2200",
            "type" => "symptom",
            "name" => "Diplopia, lasting less than 24 hours",
            "common_name" => "Double vision lasting less than 24 hours",
        ]);
        Symptom::create([
            "id" => "s_2201",
            "type" => "symptom",
            "name" => "Diplopia, lasting more than 24 hours",
            "common_name" => "Double vision lasting more than 24 hours",
        ]);
        Symptom::create([
            "id" => "s_2203",
            "type" => "symptom",
            "name" => "Dyspnea, after a few minutes of walking",
            "common_name" =>
                "Shortness of breath after a few minutes of walking",
        ]);
        Symptom::create([
            "id" => "s_2204",
            "type" => "symptom",
            "name" => "Dyspnea, on exertion",
            "common_name" => "Shortness of breath on exertion",
        ]);
        Symptom::create([
            "id" => "s_2205",
            "type" => "symptom",
            "name" => "Dyspnea, at rest",
            "common_name" => "Shortness of breath at rest",
        ]);
        Symptom::create([
            "id" => "s_2206",
            "type" => "symptom",
            "name" => "Paraphimosis",
            "common_name" => "Retracted foreskin",
        ]);
        Symptom::create([
            "id" => "s_2207",
            "type" => "symptom",
            "name" => "Edema, penis",
            "common_name" => "Swollen penis",
        ]);
        Symptom::create([
            "id" => "s_2208",
            "type" => "symptom",
            "name" => "Ulcer, not healing within 6 weeks",
            "common_name" => "Not healing ulcer",
        ]);
        Symptom::create([
            "id" => "s_2209",
            "type" => "symptom",
            "name" => "Recurrent seizures",
            "common_name" => "Recurrent seizures",
        ]);
        Symptom::create([
            "id" => "s_2211",
            "type" => "symptom",
            "name" => "Urticaria, lasting more than six weeks",
            "common_name" => "Hives lasting more than six weeks",
        ]);
        Symptom::create([
            "id" => "s_2212",
            "type" => "symptom",
            "name" => "Purulent vaginal discharge",
            "common_name" => "Purulent vaginal discharge",
        ]);
        Symptom::create([
            "id" => "s_2213",
            "type" => "symptom",
            "name" => "Self-injurious thoughts or behaviours",
            "common_name" => "Self-injurious thoughts or behaviours",
        ]);
        Symptom::create([
            "id" => "s_2214",
            "type" => "symptom",
            "name" => "Chemical burn",
            "common_name" => "Chemical burn",
        ]);
        Symptom::create([
            "id" => "s_2222",
            "type" => "symptom",
            "name" => "Wound, lip",
            "common_name" => "Wound on the lip",
        ]);
        Symptom::create([
            "id" => "s_2226",
            "type" => "symptom",
            "name" => "Nasal congestion, worsening after brief improvement",
            "common_name" => "Worsening stuffy nose after brief improvement",
        ]);
        Symptom::create([
            "id" => "s_2228",
            "type" => "symptom",
            "name" => "Self-injurious behaviour, recent",
            "common_name" => "Recent self-injurious behaviour",
        ]);
        Symptom::create([
            "id" => "s_2229",
            "type" => "symptom",
            "name" => "Self-injurious behaviour, recent, minor",
            "common_name" => "Self-injurious behaviour, recent, minor",
        ]);
        Symptom::create([
            "id" => "s_2230",
            "type" => "symptom",
            "name" => "Self-injurious behaviour, recent, major",
            "common_name" => "Self-injurious behaviour, recent, major",
        ]);
        Symptom::create([
            "id" => "s_2231",
            "type" => "symptom",
            "name" => "Dyspnea, unknown severity",
            "common_name" => "Shortness of breath of unknown severity",
        ]);
        Symptom::create([
            "id" => "s_2234",
            "type" => "symptom",
            "name" => "Breast asymmetry in size or shape",
            "common_name" => "Asymmetrical breasts",
        ]);
        Symptom::create([
            "id" => "s_2236",
            "type" => "symptom",
            "name" => "Erythema, scrotum",
            "common_name" => "Reddened scrotum",
        ]);
        Symptom::create([
            "id" => "s_2241",
            "type" => "symptom",
            "name" => "Umbilical discharge",
            "common_name" => "Belly button discharge",
        ]);
        Symptom::create([
            "id" => "s_2242",
            "type" => "symptom",
            "name" => "Eye pain, unbearable",
            "common_name" => "Unbearable eye pain",
        ]);
        Symptom::create([
            "id" => "s_2245",
            "type" => "symptom",
            "name" => "Genital injury in male",
            "common_name" => "Genital injury in male",
        ]);
        Symptom::create([
            "id" => "s_2246",
            "type" => "symptom",
            "name" => "Genital injury in female",
            "common_name" => "Genital injury in female",
        ]);
        Symptom::create([
            "id" => "s_2247",
            "type" => "symptom",
            "name" => "Enlarged front of the neck",
            "common_name" => "Swollen front of the neck",
        ]);
        Symptom::create([
            "id" => "s_2248",
            "type" => "symptom",
            "name" => "Enlarged cervical lymph nodes",
            "common_name" => "Enlarged lymph nodes in the neck",
        ]);
        Symptom::create([
            "id" => "s_2251",
            "type" => "symptom",
            "name" => "Unknown heart rate",
            "common_name" => "Unknown heart rate",
        ]);
        Symptom::create([
            "id" => "s_2252",
            "type" => "symptom",
            "name" => "Abdominal tenderness, left lower quadrant",
            "common_name" =>
                "Pain when pressing lower left part of the stomach",
        ]);
        Symptom::create([
            "id" => "s_2253",
            "type" => "symptom",
            "name" => "Flat foot",
            "common_name" => "Flat foot",
        ]);
        Symptom::create([
            "id" => "s_2254",
            "type" => "symptom",
            "name" => "Direct care to COVID-19 case",
            "common_name" => "Direct care to COVID-19 positive person",
        ]);
        Symptom::create([
            "id" => "s_2256",
            "type" => "symptom",
            "name" => "Close contact with COVID-19 case",
            "common_name" => "Close contact with COVID-19 positive person",
        ]);
        Symptom::create([
            "id" => "s_2257",
            "type" => "symptom",
            "name" => "Other type of contact with COVID-19 case",
            "common_name" =>
                "Other type of contact with COVID-19 positive person",
        ]);
        Symptom::create([
            "id" => "s_2258",
            "type" => "symptom",
            "name" => "No contact with COVID-19 case",
            "common_name" => "No contact with COVID-19 positive person",
        ]);
        Symptom::create([
            "id" => "s_2259",
            "type" => "symptom",
            "name" => "Reflex seizures",
            "common_name" => "Reflex seizures",
        ]);
        Symptom::create([
            "id" => "s_2261",
            "type" => "symptom",
            "name" => "Calf hypertrophy",
            "common_name" => "Enlarged calves",
        ]);
        Symptom::create([
            "id" => "s_2262",
            "type" => "symptom",
            "name" => "Gowers' sign",
            "common_name" =>
                "Standing up with help of hands \"walking\" up legs",
        ]);
        Symptom::create([
            "id" => "s_2266",
            "type" => "symptom",
            "name" =>
                "Dermatological changes, upper extremities excluding hands",
            "common_name" => "Skin changes on arms",
        ]);
        Symptom::create([
            "id" => "s_2267",
            "type" => "symptom",
            "name" =>
                "Dermatological changes, lower extremities excluding feet",
            "common_name" => "Skin changes on legs",
        ]);
        Symptom::create([
            "id" => "s_2268",
            "type" => "symptom",
            "name" => "Cough, alternating productivity",
            "common_name" => "Wet and dry cough appearing alternately",
        ]);
        Symptom::create([
            "id" => "s_2271",
            "type" => "symptom",
            "name" => "Gastric symptoms, after gluten ingestion",
            "common_name" =>
                "Gastric symptoms after eating foods containing gluten",
        ]);
        Symptom::create([
            "id" => "s_2272",
            "type" => "symptom",
            "name" => "Blood pressure, normal or prehypertension",
            "common_name" => "Normal blood pressure",
        ]);
        Symptom::create([
            "id" => "s_2273",
            "type" => "symptom",
            "name" => "Blood pressure, not measured",
            "common_name" => "Blood pressure, not measured",
        ]);
        Symptom::create([
            "id" => "s_2274",
            "type" => "symptom",
            "name" => "Short stature",
            "common_name" => "Decreased growth",
        ]);
        Symptom::create([
            "id" => "s_2275",
            "type" => "symptom",
            "name" => "Abdominal pain, localised",
            "common_name" => "Localised stomach pain",
        ]);
        Symptom::create([
            "id" => "s_2276",
            "type" => "symptom",
            "name" => "Bleeding from anus, light",
            "common_name" => "Light bleeding from anus",
        ]);
        Symptom::create([
            "id" => "s_2277",
            "type" => "symptom",
            "name" => "Bleeding from anus, heavy",
            "common_name" => "Heavy bleeding from anus",
        ]);
        Symptom::create([
            "id" => "s_2278",
            "type" => "symptom",
            "name" => "Ataxia, acute",
            "common_name" => "Recent coordination problems",
        ]);
        Symptom::create([
            "id" => "s_2279",
            "type" => "symptom",
            "name" => "Ataxia, subacute",
            "common_name" =>
                "Coordination problems since several days, weeks, or months ago",
        ]);
        Symptom::create([
            "id" => "s_2280",
            "type" => "symptom",
            "name" => "Ataxia, chronic",
            "common_name" => "Coordination problems for more than 1 year",
        ]);
        Symptom::create([
            "id" => "s_2281",
            "type" => "symptom",
            "name" => "Abdominal pain, unspecified location",
            "common_name" => "Abdominal pain, unspecified location",
        ]);
        Symptom::create([
            "id" => "s_2282",
            "type" => "symptom",
            "name" => "Pale skin, only fingers",
            "common_name" => "Pale skin, only fingers",
        ]);
        Symptom::create([
            "id" => "s_2283",
            "type" => "symptom",
            "name" => "Bruxism",
            "common_name" => "Teeth grinding",
        ]);
        Symptom::create([
            "id" => "s_2284",
            "type" => "symptom",
            "name" => "Back pain, nocturnal",
            "common_name" => "Nighttime back pain",
        ]);
        Symptom::create([
            "id" => "s_2285",
            "type" => "symptom",
            "name" => "Skin mass, natal cleft",
            "common_name" => "Skin mass in groove between buttocks",
        ]);
        Symptom::create([
            "id" => "s_2288",
            "type" => "symptom",
            "name" => "Abdominal pain, unknown character",
            "common_name" => "Stomach pain of unspecific character",
        ]);
        Symptom::create([
            "id" => "s_2289",
            "type" => "symptom",
            "name" => "Excessive fear of separation",
            "common_name" => "Excessive fear of separation",
        ]);
        Symptom::create([
            "id" => "s_2290",
            "type" => "symptom",
            "name" => "Speech and language impairment, rapid onset",
            "common_name" => "Recent speech and language difficulties",
        ]);
        Symptom::create([
            "id" => "s_2291",
            "type" => "symptom",
            "name" => "Subungual splinter hemorrhages",
            "common_name" => "Splinter hemorrhages",
        ]);
        Symptom::create([
            "id" => "s_2292",
            "type" => "symptom",
            "name" => "Enlarged axillary lymph nodes",
            "common_name" => "Enlarged lymph nodes in the armpit",
        ]);
        Symptom::create([
            "id" => "s_2294",
            "type" => "symptom",
            "name" => "Reflex absence seizures",
            "common_name" => "Reflex absence seizures",
        ]);
        Symptom::create([
            "id" => "s_2296",
            "type" => "symptom",
            "name" => "Choking",
            "common_name" => "Choking",
        ]);
        Symptom::create([
            "id" => "s_2298",
            "type" => "symptom",
            "name" => "Joint pain, mechanical",
            "common_name" =>
                "Joint pain worsening with movement and improving at rest",
        ]);
        Symptom::create([
            "id" => "s_2299",
            "type" => "symptom",
            "name" => "Joint pain, inflammatory",
            "common_name" => "Joint pain worsening with immobility",
        ]);
        Symptom::create([
            "id" => "s_2300",
            "type" => "symptom",
            "name" => "Swallowed foreign body",
            "common_name" => "Swallowed object",
        ]);
        Symptom::create([
            "id" => "s_2302",
            "type" => "symptom",
            "name" => "Loss of consciousness, transient",
            "common_name" => "Fainting",
        ]);
        Symptom::create([
            "id" => "s_2303",
            "type" => "symptom",
            "name" => "Loss of consciousness, persistent",
            "common_name" => "Loss of consciousness, persistent",
        ]);
        Symptom::create([
            "id" => "s_2304",
            "type" => "symptom",
            "name" => "Paresthesia, upper limbs",
            "common_name" => "Numbness of upper limbs",
        ]);
        Symptom::create([
            "id" => "s_2305",
            "type" => "symptom",
            "name" => "Tremors, unspecified location",
            "common_name" => "Tremors, unspecified location",
        ]);
        Symptom::create([
            "id" => "s_2306",
            "type" => "symptom",
            "name" => "Paresthesia, lower limbs",
            "common_name" => "Numbness of lower limbs",
        ]);
        Symptom::create([
            "id" => "s_2307",
            "type" => "symptom",
            "name" => "Nasal congestion, acute",
            "common_name" => "Stuffy nose lasting less than 10 days",
        ]);
        Symptom::create([
            "id" => "s_2308",
            "type" => "symptom",
            "name" => "Nasal congestion, subacute",
            "common_name" =>
                "Stuffy nose lasting more than 10 days but less than 3 months",
        ]);
        Symptom::create([
            "id" => "s_2309",
            "type" => "symptom",
            "name" => "Lump in popliteal region",
            "common_name" => "Lump behind knee",
        ]);
        Symptom::create([
            "id" => "s_2311",
            "type" => "symptom",
            "name" => "Abdominal pain, no exacerbation factor",
            "common_name" => "Stomach pain not worsening",
        ]);
        Symptom::create([
            "id" => "s_2314",
            "type" => "symptom",
            "name" => "Back pain, lumbar, unknown radiating direction",
            "common_name" => "Lower back pain unknown spreading direction",
        ]);
        Symptom::create([
            "id" => "s_2315",
            "type" => "symptom",
            "name" => "Paresthesia, one foot",
            "common_name" => "Foot tingling or numbness",
        ]);
        Symptom::create([
            "id" => "s_2316",
            "type" => "symptom",
            "name" => "Diarrhea, unknown character",
            "common_name" => "Diarrhea, unknown character",
        ]);
        Symptom::create([
            "id" => "s_2318",
            "type" => "symptom",
            "name" => "Paresis, one lower limb",
            "common_name" => "Difficulty moving one lower limb",
        ]);
        Symptom::create([
            "id" => "s_2319",
            "type" => "symptom",
            "name" => "Fever, lasting less than 3 days",
            "common_name" => "Fever lasting less than 3 days",
        ]);
        Symptom::create([
            "id" => "s_2320",
            "type" => "symptom",
            "name" => "Fever, lasting 3 to 7 days",
            "common_name" => "Fever lasting 3 to 7 days",
        ]);
        Symptom::create([
            "id" => "s_2321",
            "type" => "symptom",
            "name" => "Fever, lasting more than 7 days",
            "common_name" => "Fever lasting more than 7 days",
        ]);
        Symptom::create([
            "id" => "s_2322",
            "type" => "symptom",
            "name" => "Diarrhea, lasting more than 4 weeks",
            "common_name" => "Diarrhea lasting more than 4 weeks",
        ]);
        Symptom::create([
            "id" => "s_2326",
            "type" => "symptom",
            "name" => "Paresis, paraparesis",
            "common_name" => "Difficulty moving both lower limbs",
        ]);
        Symptom::create([
            "id" => "s_2328",
            "type" => "symptom",
            "name" => "Diarrhea, lasting 2 to 4 weeks",
            "common_name" => "Diarrhea lasting 2 to 4 weeks",
        ]);
        Symptom::create([
            "id" => "s_2329",
            "type" => "symptom",
            "name" => "Eye discharge, thick and clear",
            "common_name" => "Non-purulent eye discharge",
        ]);
        Symptom::create([
            "id" => "s_2330",
            "type" => "symptom",
            "name" => "Muscle weakness, general",
            "common_name" => "General muscle weakness",
        ]);
        Symptom::create([
            "id" => "s_2331",
            "type" => "symptom",
            "name" => "Paresis, localised",
            "common_name" => "Localised muscle weakness",
        ]);
        Symptom::create([
            "id" => "s_2333",
            "type" => "symptom",
            "name" => "Fear of parent",
            "common_name" => "Fear of parent",
        ]);
        Symptom::create([
            "id" => "s_2335",
            "type" => "symptom",
            "name" => "Pain in lower limb, shin",
            "common_name" => "Shin pain",
        ]);
        Symptom::create([
            "id" => "s_2336",
            "type" => "symptom",
            "name" => "Galactorrhea in men",
            "common_name" => "Milky discharge from the nipple",
        ]);
        Symptom::create([
            "id" => "s_2338",
            "type" => "symptom",
            "name" => "Vaginal discharge, grey",
            "common_name" => "Vaginal discharge, grey",
        ]);
        Symptom::create([
            "id" => "s_2339",
            "type" => "symptom",
            "name" => "Paresis, limbs, tetraparesis",
            "common_name" => "Weakness of all limbs",
        ]);
        Symptom::create([
            "id" => "s_2340",
            "type" => "symptom",
            "name" => "Paresis, limbs, other",
            "common_name" => "Paresis, limbs, other",
        ]);
        Symptom::create([
            "id" => "s_2341",
            "type" => "symptom",
            "name" => "Bruise",
            "common_name" => "Bruise",
        ]);
        Symptom::create([
            "id" => "s_2342",
            "type" => "symptom",
            "name" => "Paresis, one upper limb",
            "common_name" => "Difficulty moving one upper limb",
        ]);
        Symptom::create([
            "id" => "s_2343",
            "type" => "symptom",
            "name" => "Paresis, both upper limbs",
            "common_name" => "Difficulty moving both upper limbs",
        ]);
        Symptom::create([
            "id" => "s_2344",
            "type" => "symptom",
            "name" => "Writing difficulties",
            "common_name" => "Writing difficulties",
        ]);
        Symptom::create([
            "id" => "s_2345",
            "type" => "symptom",
            "name" => "Paresis, limbs, lasting under 24 hours",
            "common_name" => "Limb weakness lasting less than 24 hours",
        ]);
        Symptom::create([
            "id" => "s_2346",
            "type" => "symptom",
            "name" => "Paresis, limbs, lasting between 24 hours and 4 weeks",
            "common_name" =>
                "Limb weakness lasting between 24 hours and 4 weeks",
        ]);
        Symptom::create([
            "id" => "s_2347",
            "type" => "symptom",
            "name" => "Paresis, limbs, lasting over 4 weeks",
            "common_name" => "Limb weakness lasting over 4 weeks",
        ]);
        Symptom::create([
            "id" => "s_2348",
            "type" => "symptom",
            "name" => "Facial muscle paresis, lasting less than 24 hours",
            "common_name" =>
                "Facial muscle weakness lasting less than 24 hours",
        ]);
        Symptom::create([
            "id" => "s_2349",
            "type" => "symptom",
            "name" =>
                "Facial muscle paresis, lasting between 24 hours and 4 weeks",
            "common_name" =>
                "Facial muscle weakness lasting between 24 hours and 4 weeks",
        ]);
        Symptom::create([
            "id" => "s_2350",
            "type" => "symptom",
            "name" => "Facial muscle paresis, lasting over 4 weeks",
            "common_name" => "Facial muscle weakness lasting over 4 weeks",
        ]);
        Symptom::create([
            "id" => "s_2351",
            "type" => "symptom",
            "name" => "Reading difficulties",
            "common_name" => "Reading difficulties",
        ]);
        Symptom::create([
            "id" => "s_2352",
            "type" => "symptom",
            "name" => "Mathematics difficulties",
            "common_name" => "Mathematics difficulties",
        ]);
        Symptom::create([
            "id" => "s_2354",
            "type" => "symptom",
            "name" => "Lesions located in posterior pharynx",
            "common_name" => "Lesions at the back of the throat",
        ]);
        Symptom::create([
            "id" => "s_2355",
            "type" => "symptom",
            "name" => "Insertion of foreign body in nose or ear",
            "common_name" => "Insertion of foreign body in nose or ear",
        ]);
        Symptom::create([
            "id" => "s_2356",
            "type" => "symptom",
            "name" => "Single red area, larger than 1 cm",
            "common_name" => "Single red area, larger than 1 cm",
        ]);
        Symptom::create([
            "id" => "s_2357",
            "type" => "symptom",
            "name" => "Multiple red areas, larger than 1 cm",
            "common_name" => "Multiple red areas, larger than 1 cm",
        ]);
        Symptom::create([
            "id" => "s_2358",
            "type" => "symptom",
            "name" => "Single red spot, smaller than 1 cm",
            "common_name" => "Single red spot, smaller than 1 cm",
        ]);
        Symptom::create([
            "id" => "s_2359",
            "type" => "symptom",
            "name" => "Multiple red spots, smaller than 1 cm",
            "common_name" => "Multiple red spots, smaller than 1 cm",
        ]);
        Symptom::create([
            "id" => "s_2361",
            "type" => "symptom",
            "name" => "Bone pain, nocturnal",
            "common_name" => "Nighttime bone pain",
        ]);
        Symptom::create([
            "id" => "s_2366",
            "type" => "symptom",
            "name" => "Frontal bossing",
            "common_name" => "Protruding forehead",
        ]);
        Symptom::create([
            "id" => "s_2368",
            "type" => "symptom",
            "name" => "Dyspnea, sudden worsening",
            "common_name" => "Sudden worsening of dyspnea",
        ]);
        Symptom::create([
            "id" => "s_2370",
            "type" => "symptom",
            "name" => "Multiple red changes, different sizes",
            "common_name" => "Multiple red changes, different sizes",
        ]);
        Symptom::create([
            "id" => "s_2371",
            "type" => "symptom",
            "name" => "Redness of the skin, unspecified",
            "common_name" => "Redness of the skin, unspecified",
        ]);
        Symptom::create([
            "id" => "s_2373",
            "type" => "symptom",
            "name" => "Decreased head circumference",
            "common_name" => "Decreased head circumference",
        ]);
        Symptom::create([
            "id" => "s_2375",
            "type" => "symptom",
            "name" => "Blood oxygen saturation, not measured",
            "common_name" => "Blood oxygen level not measured",
        ]);
        Symptom::create([
            "id" => "s_2376",
            "type" => "symptom",
            "name" => "Blood oxygen saturation, normal",
            "common_name" => "Normal blood oxygen level",
        ]);
        Symptom::create([
            "id" => "s_2380",
            "type" => "symptom",
            "name" => "Maternal alcohol consumption during pregnancy",
            "common_name" => "Mother's alcohol consumption during pregnancy",
        ]);
        Symptom::create([
            "id" => "s_2381",
            "type" => "symptom",
            "name" => "Enamel lesions",
            "common_name" => "Tooth lesion",
        ]);
        Symptom::create([
            "id" => "s_2382",
            "type" => "symptom",
            "name" => "Dermatological changes, localised",
            "common_name" => "Skin changes on specific part of body",
        ]);
        Symptom::create([
            "id" => "s_2383",
            "type" => "symptom",
            "name" => "Enamel hypomineralization",
            "common_name" => "Enamel hypomineralization",
        ]);
        Symptom::create([
            "id" => "s_2384",
            "type" => "symptom",
            "name" => "Enamel lesions, symmetrical",
            "common_name" => "Symmetrical tooth lesions",
        ]);
        Symptom::create([
            "id" => "s_2387",
            "type" => "symptom",
            "name" => "Blood oxygen saturation, between 90% and 94%",
            "common_name" => "Blood oxygen level between 90 and 94%",
        ]);
        Symptom::create([
            "id" => "s_2388",
            "type" => "symptom",
            "name" => "Blood oxygen saturation, between 80% and 89%",
            "common_name" => "Blood oxygen level between 80 and 89%",
        ]);
        Symptom::create([
            "id" => "s_2389",
            "type" => "symptom",
            "name" => "Blood oxygen saturation, lower than 80%",
            "common_name" => "Blood oxygen level lower than 80%",
        ]);
        Symptom::create([
            "id" => "s_2390",
            "type" => "symptom",
            "name" => "Blood oxygen saturation, sudden worsening",
            "common_name" => "Sudden worsening of blood oxygen saturation",
        ]);
        Symptom::create([
            "id" => "s_2391",
            "type" => "symptom",
            "name" => "Enamel lesions, spots",
            "common_name" => "Spots on tooth",
        ]);
        Symptom::create([
            "id" => "s_2393",
            "type" => "symptom",
            "name" => "Change in colour of a tooth, white",
            "common_name" => "Change in colour of a tooth, white",
        ]);
        Symptom::create([
            "id" => "s_2396",
            "type" => "symptom",
            "name" => "Change in colour of a tooth, brown",
            "common_name" => "Change in colour of a tooth, brown",
        ]);
    }
}

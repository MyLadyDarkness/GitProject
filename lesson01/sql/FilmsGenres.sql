/*
Navicat PGSQL Data Transfer

Source Server         : local
Source Server Version : 90324
Source Host           : localhost:5432
Source Database       : OnlineCinema
Source Schema         : public

Target Server Type    : PGSQL
Target Server Version : 90324
File Encoding         : 65001

Date: 2018-09-30 23:05:03
*/


-- ----------------------------
-- Table structure for "public"."FilmsGenres"
-- ----------------------------
DROP TABLE "public"."FilmsGenres";
CREATE TABLE "public"."FilmsGenres" (
"Film_id" numeric(10) NOT NULL,
"Genre_id" numeric(10) NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of FilmsGenres
-- ----------------------------
INSERT INTO "public"."FilmsGenres" VALUES ('1', '1');
INSERT INTO "public"."FilmsGenres" VALUES ('2', '2');
INSERT INTO "public"."FilmsGenres" VALUES ('3', '3');
INSERT INTO "public"."FilmsGenres" VALUES ('4', '4');
INSERT INTO "public"."FilmsGenres" VALUES ('5', '5');

-- ----------------------------
-- Alter Sequences Owned By 
-- ----------------------------

-- ----------------------------
-- Uniques structure for table "public"."FilmsGenres"
-- ----------------------------
ALTER TABLE "public"."FilmsGenres" ADD UNIQUE ("Film_id", "Genre_id");
ALTER TABLE "public"."FilmsGenres" ADD UNIQUE ("Film_id");
ALTER TABLE "public"."FilmsGenres" ADD UNIQUE ("Genre_id");

-- ----------------------------
-- Primary Key structure for table "public"."FilmsGenres"
-- ----------------------------
ALTER TABLE "public"."FilmsGenres" ADD PRIMARY KEY ("Film_id", "Genre_id");

-- ----------------------------
-- Foreign Key structure for table "public"."FilmsGenres"
-- ----------------------------
ALTER TABLE "public"."FilmsGenres" ADD FOREIGN KEY ("Film_id") REFERENCES "public"."Films" ("Film_Id") ON DELETE CASCADE ON UPDATE CASCADE;
ALTER TABLE "public"."FilmsGenres" ADD FOREIGN KEY ("Genre_id") REFERENCES "public"."Genres" ("Genre_id") ON DELETE CASCADE ON UPDATE CASCADE;

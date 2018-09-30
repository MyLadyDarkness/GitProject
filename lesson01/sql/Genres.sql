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

Date: 2018-09-30 23:05:18
*/


-- ----------------------------
-- Table structure for "public"."Genres"
-- ----------------------------
DROP TABLE "public"."Genres";
CREATE TABLE "public"."Genres" (
"Genre_id" numeric(10) NOT NULL,
"Genre_name" varchar(100) NOT NULL
)
WITH (OIDS=FALSE)

;

-- ----------------------------
-- Records of Genres
-- ----------------------------
INSERT INTO "public"."Genres" VALUES ('1', 'Comedy');
INSERT INTO "public"."Genres" VALUES ('2', 'Drama');
INSERT INTO "public"."Genres" VALUES ('3', 'Family');
INSERT INTO "public"."Genres" VALUES ('4', 'Anime');
INSERT INTO "public"."Genres" VALUES ('5', 'Western');

-- ----------------------------
-- Alter Sequences Owned By 
-- ----------------------------

-- ----------------------------
-- Primary Key structure for table "public"."Genres"
-- ----------------------------
ALTER TABLE "public"."Genres" ADD PRIMARY KEY ("Genre_id");

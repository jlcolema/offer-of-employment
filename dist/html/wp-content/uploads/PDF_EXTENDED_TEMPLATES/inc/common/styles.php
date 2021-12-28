/* blue = #0078ae, rgb 0, 120, 174 */

/* Displays on all pages of the PDF */

@page {

	header: html_offerLetterHeader;
	footer: html_offerLetterFooter;

}

/* Overrides the @page header and displays on the first page of the PDF */

@page :first {

	header: html_offerLetterHeaderForFirstPage;

}

/* Header */

.header {}

	.banner {

		margin: 0 0 12pt 0;
		padding: 0 0 12pt 0;
		border-bottom: 6pt solid #0078ae;

	}

		.banner__img {}

	.header__columns {

		overflow: hidden;

	}

		.header__column {

			width: 50%;
			font-size: 8pt;
			line-height: 12pt;
			color: silver;

		}

		.header__column--first {

			float: left;

		}

		.header__column--second {

			float: right;
			text-align: right;

		}

/* Main */

.main {

	font-size: 9pt;
	line-height: 11pt;

}

	/* Entry */

	.entry {}

		.entry__title {

			font-size: 10pt;
			line-height: 12pt;
			font-weight: normal;
			color: #0078ae;

		}

		.entry__date {}

	/* Description */

	.description {}

	.description__opening {}

		.description__p--opening {}

	.description__details {}

		.description__p--details {}

			.description__list {}

				.description__item {

					font-size: 9pt;
					line-height: 11pt;

				}

	/* Schedule */

	.schedule {

		/* margin: 0 0 12pt 0; */

	}

		.schedule__header {

			font-size: 9pt;
			line-height: 11pt;
			font-weight: normal;
			color: #0078ae;

		}

		.schedule__weekly {}

			.schedule__thead {}

				.schedule__thead-tr {}

					.schedule__th {

						width: 25%;
						padding: 3pt 0 3pt 0;
						font-size: 9pt;
						line-height: 11pt;
						text-align: left;
						border-bottom: 2px solid black;

					}

			.schedule__tbody {}

				.schedule__tbody-tr {}

				.schedule__tbody-tr--sunday {}

				.schedule__tbody-tr--monday {

					background: lightgray;

				}

				.schedule__tbody-tr--tuesday {}

				.schedule__tbody-tr--wednesday {

					background: lightgray;

				}

				.schedule__tbody-tr--thursday {}

				.schedule__tbody-tr--friday {

					background: lightgray;

				}

				.schedule__tbody-tr--saturday {}

					.schedule__td {

						width: 25%;
						padding: 3pt 0 3pt 0;
						font-size: 9pt;
						line-height: 11pt;
						text-align: left;

					}

					.schedule__td--day {}

					.schedule__td--time {}

					.schedule__td--note {}

					.schedule__td--hours {}

						.flexible {}

			.schedule__tfoot {}

				.schedule__tfoot-tr {}

					.schedule__th--total-label {

						padding-right: 3pt;
						text-align: right;
						border: none;
						border-top: 1px solid black;

					}

					.schedule__td--total-hours {

						border: none;
						border-top: 1px solid black;

					}

	/* Positions */

	.positions {

		margin: 0 0 12pt 0;

	}

		.positions__p {}

		.positions__table {}

			.positions__thead {}

				.positions__thead-tr {}

					.positions__th {

						width: 25%;
						padding: 3pt 0 3pt 0;
						font-size: 9pt;
						line-height: 11pt;
						text-align: left;
						border-bottom: 2px solid black;

					}

					.positions__th--position {}

					.positions__th--campus {}

					.positions__th--rate {}

					.positions__th--hours {}

			.positions__tbody {}

				.positions__tbody-tr {}

				.positions__tbody-tr--odd {}

				.positions__tbody-tr--even {

					background: lightgray;

				}

					.positions__td {

						width: 25%;
						padding: 3pt 0 3pt 0;
						font-size: 9pt;
						line-height: 11pt;
						text-align: left;

					}

					.positions__td--position {}

					.positions__td--campus {}

					.positions__td--rate {}

					.positions__td--hours {}

			.positions__tfoot {}

				.positions__tfoot-tr {}

					.positions__th--total-label {

						padding-right: 3pt;
						font-size: 9pt;
						line-height: 11pt;
						text-align: right;
						border: none;
						border-top: 1px solid black;

					}

					.positions__td--total-hours {

						font-size: 9pt;
						line-height: 11pt;
						border: none;
						border-top: 1px solid black;

					}

	/* All Hours */

	.all-hours {

		margin: 0 0 12pt 0;

	}

		.all-hours__table {

			border: 2px solid black;

		}

			.all-hours__tbody {}

				.all-hours__tr {}

					.all-hours__th {

						width: 75%;
						padding: 3pt 3pt 3pt 0;
						text-align: right;

					}

					.all-hours__td {

						width: 25%;
						padding: 3pt 0 3pt 0;
						text-align: left;

					}

					.all-hours__th--total-label {}

					.all-hours__td--total-hours {}

	/* Benefits */

	.benefits {}

		.benefits__list {}

			.benefits__item {

				font-size: 9pt;
				line-height: 11pt;

			}

	/* Statments */

	.statement {}

		.statement__p {}

	.statement__at-will {

		font-size: 8pt;
		line-height: 10pt;
		font-style: italic;

	}

	.statement__agreement {}

	/* Signature */

	.signature {

		margin: 24pt 0 0 0;

	}

	.signature--employee {}

	.signature--crosspoint {}

		.signature__fields {

			overflow: hidden;

		}

			.signature__field {

				float: left;
				border-top: 1px solid black;

			}

			.signature__field--name {

				width: 4in;

			}

			.signature__field--date {

				width: 2in;
				margin: 0 0 0 0.25in;

			}

				.signature__label {}

/* Footer */

.footer {}

	.footer__columns {

		overflow: hidden;

	}

		.footer__column {

			float: left;
			width: 33.33333%;
			font-size: 8pt;
			line-height: 10pt;
			color: silver;

		}

		.footer__column--first {

			text-align: left;

		}

		.footer__column--second {

			text-align: center;

		}

		.footer__column--third {

			text-align: right;

		}

/* Miscellaneous */

/* Development */

.variable {

	/* background: pink; */

}

	.variable--is-working {

		/* background: lightgreen; */

	}